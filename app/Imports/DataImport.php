<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'nama' => $row[0],
            'c1' => $row[1],
            'c2' => $row[2],
            'c3' => $row[3],
            'c4' => $row[4],
            'c5' => $row[5],
            'c6' => $row[6],
        ]);
    }
}
