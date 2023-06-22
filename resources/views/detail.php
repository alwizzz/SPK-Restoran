<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0d1117;
            color: #c9d1d9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #161b22;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #f0f6fc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="file"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #c9d1d9;
            border-radius: 4px;
            background-color: #0d1117;
            color: #c9d1d9;
        }

        .error-message {
            color: red;
            display: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #238636;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2ea043;
        }

        .mb-5 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="dark-mode">
    <div class="container">
        <h1>Detail Kalkulasi</h1>

        <div class="go-back">
            <a href="/">Go Back</a>
        </div>
            
            
        <p>Daftar Kriteria</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Jenis</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>C1</td>
                    <td>Kepadatan Penduduk per Km2</td>
                    <td>Benefit</td>
                </tr>
                <tr>
                    <td>C2</td>
                    <td>Jumlah Penduduk non-Muslim</td>
                    <td>Benefit</td>
                </tr>
                <tr>
                    <td>C3</td>
                    <td>Jumlah Restoran</td>
                    <td>Cost</td>
                </tr>
                <tr>
                    <td>C4</td>
                    <td>Jumlah Pusat Aktivitas Masyarakat</td>
                    <td>Benefit</td>
                </tr>
                <tr>
                    <td>C5</td>
                    <td>Jumlah Sekolah Kristen dan Katolik</td>
                    <td>Benefit</td>
                </tr>
                <tr>
                    <td>C6</td>
                    <td>Jumlah Tempat Peribadatan non-Muslim</td>
                    <td>Benefit</td>
                </tr>
            </tbody>
        </table>


        <p>Fuzzy Membership C1</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Variabel</th>
                <th scope="col">Range</th>
                <th scope="col">Nilai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sangat Rendah</td>
                    <td>x < 5000</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Rendah</td>
                    <td>5000 <= x < 20000</td>
                    <td>0,25</td>
                </tr>
                <tr>
                    <td>Cukup</td>
                    <td>20000 <= x < 40000</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>40000 <= x < 80000</td>
                    <td>0,75</td>
                </tr>
                <tr>
                    <td>Sangat Tinggi</td>
                    <td>x > 80000</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>



        <p>Fuzzy Membership C2</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Variabel</th>
                <th scope="col">Range</th>
                <th scope="col">Nilai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sangat Rendah</td>
                    <td>x < 100</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Rendah</td>
                    <td>100 <= x < 1000</td>
                    <td>0,25</td>
                </tr>
                <tr>
                    <td>Cukup</td>
                    <td>1000 <= x < 10000</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>10000 <= x < 40000</td>
                    <td>0,75</td>
                </tr>
                <tr>
                    <td>Sangat Tinggi</td>
                    <td>x > 40000</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>


        <p>Fuzzy Membership C3</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Variabel</th>
                <th scope="col">Range</th>
                <th scope="col">Nilai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sangat Rendah</td>
                    <td>x < 5</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Rendah</td>
                    <td>5 <= x < 10</td>
                    <td>0,25</td>
                </tr>
                <tr>
                    <td>Cukup</td>
                    <td>10 <= x < 20</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>20 <= x < 30</td>
                    <td>0,75</td>
                </tr>
                <tr>
                    <td>Sangat Tinggi</td>
                    <td>x > 30</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>


        <p>Fuzzy Membership C4</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Variabel</th>
                <th scope="col">Range</th>
                <th scope="col">Nilai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rendah</td>
                    <td>x < 2</td>
                    <td>0,0</td>
                </tr>
                <tr>
                    <td>Cukup</td>
                    <td>2 <= x < 5</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>x > 5</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>


        <p>Fuzzy Membership C5</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Variabel</th>
                <th scope="col">Range</th>
                <th scope="col">Nilai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rendah</td>
                    <td>x < 2</td>
                    <td>0,0</td>
                </tr>
                <tr>
                    <td>Cukup</td>
                    <td>2 <= x < 5</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>x > 5</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>


        <p>Fuzzy Membership C6</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Variabel</th>
                <th scope="col">Range</th>
                <th scope="col">Nilai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rendah</td>
                    <td>x < 2</td>
                    <td>0,0</td>
                </tr>
                <tr>
                    <td>Cukup</td>
                    <td>2 <= x < 5</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>x > 5</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
        
    </div>

    
</body>
</html>
