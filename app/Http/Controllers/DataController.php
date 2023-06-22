<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Data;

class DataController extends Controller
{
    
    private $criteria = [
        [
            'name' => 'c1',
            'is_cost' => false
        ],
        [
            'name' => 'c2',
            'is_cost' => false
        ],
        [
            'name' => 'c3',
            'is_cost' => true
        ],
        [
            'name' => 'c4',
            'is_cost' => false
        ],
        [
            'name' => 'c5',
            'is_cost' => false
        ],
        [
            'name' => 'c6',
            'is_cost' => false
        ],
    ];

    // private $criteria = [
    //     'c1',
    //     'c2',
    //     'c3',
    //     'c4',
    //     'c5',
    //     'c6'
    // ];

    private function lessThan($value, $threshold){
        if($value < $threshold){ return true; }
        else { return false; }
    }

    private function moreThanEqual($value, $threshold){
        if($value >= $threshold){ return true; }
        else { return false; }
    }

    private function inRangeOf($value, $minInclusive, $maxExclusive){
        if($value >= $minInclusive && $value < $maxExclusive){ return true;}
        else {return false; }
    }


    private function fuzzify($value, $criterion)
    {
        if($criterion == "c1"){
            if($this->lessThan($value, 5000)){ return 0; } // Sangat Rendah
            else if($this->inRangeOf($value, 5000, 20000)){ return 0.25; } // Rendah
            else if($this->inRangeOf($value, 20000, 40000)){ return 0.5; } // Cukup
            else if($this->inRangeOf($value, 40000, 80000)){ return 0.75; } // Tinggi
            else if($this->moreThanEqual($value, 80000)){ return 1; } // Sangat Tinggi
            else {return "error";}
        } else if($criterion == "c2"){
            if($this->lessThan($value, 100)){ return 0; } // Sangat Rendah
            else if($this->inRangeOf($value, 100, 1000)){ return 0.25; } // Rendah
            else if($this->inRangeOf($value, 1000, 10000)){ return 0.5; } // Cukup
            else if($this->inRangeOf($value, 10000, 40000)){ return 0.75; } // Tinggi
            else if($this->moreThanEqual($value, 40000)){ return 1; } // Sangat Tinggi
            else {return "error";}
        } else if($criterion == "c3"){
            if($this->lessThan($value, 5)){ return 0; } // Sangat Rendah
            else if($this->inRangeOf($value, 5, 10)){ return 0.25; } // Rendah
            else if($this->inRangeOf($value, 10, 20)){ return 0.5; } // Cukup
            else if($this->inRangeOf($value, 20, 30)){ return 0.75; } // Tinggi
            else if($this->moreThanEqual($value, 30)){ return 1; } // Sangat Tinggi
            else {return "error";}
        } else if($criterion == "c4"){
            if($this->lessThan($value, 2)){ return 0; } // Rendah
            else if($this->inRangeOf($value, 2, 5)){ return 0.25; } // Cukup
            else if($this->moreThanEqual($value, 5)){ return 0.5; } // Tinggi
            else {return "error";}
        } else if($criterion == "c5"){
            if($this->lessThan($value, 2)){ return 0; } // Rendah
            else if($this->inRangeOf($value, 2, 5)){ return 0.25; } // Cukup
            else if($this->moreThanEqual($value, 5)){ return 0.5; } // Tinggi
            else {return "error";}
        } else if($criterion == "c6"){
            if($this->lessThan($value, 2)){ return 0; } // Rendah
            else if($this->inRangeOf($value, 2, 5)){ return 0.25; } // Cukup
            else if($this->moreThanEqual($value, 5)){ return 0.5; } // Tinggi
            else {return "error";}
        }
    }



    public function process(Request $request)
    {
        Data::truncate();

        $file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('files', $nama_file);

        Excel::import(new DataImport, public_path('/files/'.$nama_file));
        Data::create([
            "nama" => "WEIGHT",
            "c1" => $request->w_c1,
            "c2" => $request->w_c2,
            "c3" => $request->w_c3,
            "c4" => $request->w_c4,
            "c5" => $request->w_c5,
            "c6" => $request->w_c6,
        ]);

        return $this->calculate();
    }

    private function calculate()
    {
        // $criteria = [
        //     'c1',
        //     'c2',
        //     'c3',
        //     'c4',
        //     'c5',
        //     'c6'
        // ];

        // data, exclude weight
        $data = Data::latest()->get();
        $data = $data->reject(function ($d) {
            return $d['nama'] == "WEIGHT";
        });
        $original_data = $data;

        // weight
        $weights = (Data::where('nama', 'WEIGHT')->get())[0];

        
        // ========= Tahap 0: Fuzzify =======================
        for($i = 0; $i < count($data); $i++){
            for($j = 0; $j < count($this->criteria); $j++){
                $criterion = $this->criteria[$j]['name'];
                $value = $data[$i][$criterion];
                
                // new fuzzified value
                $data[$i][$criterion] = $this->fuzzify($value, $criterion);
            }
        }
        $fuzzified_data = $data;
        

        // ========== Tahap 1 =======================

        // cari min max tiap criteria
        $mins = [];
        $maxs = [];
        foreach($this->criteria as $c){
            $mins[$c['name']] = $data->min($c['name']);
            $maxs[$c['name']] = $data->max($c['name']);
        }

        $decision_matrix = [];
        for($i = 0; $i < count($data); $i++){
            for($j = 0; $j < count($this->criteria); $j++)
            {
                $c = $this->criteria[$j];

                $value;
                if($c['is_cost']){
                    $value = $mins[$c['name']] / $data[$i][$c['name']];
                } else {
                    $value = $data[$i][$c['name']] / $maxs[$c['name']];
                }

                $decision_matrix[$i][$j] = $value;
            }
        }


        // ========= Tahap 2 =======================
        $score = [];
        for($i = 0; $i < count($decision_matrix); $i++){
            $sum_product = 0;

            for($j = 0; $j < count($this->criteria); $j++)
            {
                $product = $decision_matrix[$i][$j] * $weights[$this->criteria[$j]['name']];
                $sum_product += $product;
            }

            $score[$i] = $sum_product;
        }

        $result = [];
        for($i = 0; $i < count($data); $i++){
            $result[$i]['nama'] = $data[$i]->nama;
            $result[$i]['score'] = $score[$i];
        }

        $result = collect($result);
        $sorted = $result->sortByDesc('score');

        // return $sorted->values()->all();
        return view('result');
    }
}
