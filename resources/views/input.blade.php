<!DOCTYPE html>
<html>
<head>
    <title>Input</title>
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
            padding: 40px;
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
<body>
    <div class="container">
        <h1>Input</h1>

        <form method="post" action="process" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="inputAddress2">File</label>
                <input type="file" name="file">
            </div>

            <div class="form-group">
                <label for="inputAddress">Bobot "Kepadatan Penduduk per Km2" (1-10)</label>
                <input required type="number" class="form-control" name="w_c1" id="w_c1" min="1" max="10">
                <span class="error-message">Masukkan angka antara 1-10.</span>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Bobot "Jumlah Penduduk non-Muslim" (1-10)</label>
                <input required type="number" class="form-control" name="w_c2" id="w_c2" min="1" max="10">
                <span class="error-message">Masukkan angka antara 1-10.</span>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Bobot "Jumlah Restoran" (1-10)</label>
                <input required type="number" class="form-control" name="w_c3" id="w_c3" min="1" max="10">
                <span class="error-message">Masukkan angka antara 1-10.</span>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Bobot "Jumlah Pusat Aktivitas Masyarakat" (1-10)</label>
                <input required type="number" class="form-control" name="w_c4" id="w_c4" min="1" max="10">
                <span class="error-message">Masukkan angka antara 1-10.</span>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Bobot "Jumlah Sekolah Kristen dan Katolik" (1-10)</label>
                <input required type="number" class="form-control" name="w_c5" id="w_c5" min="1" max="10">
                <span class="error-message">Masukkan angka antara 1-10.</span>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Bobot "Jumlah Tempat Peribadatan non-Muslim" (1-10)</label>
                <input required type="number" class="form-control" name="w_c6" id="w_c6" min="1" max="10">
                <span class="error-message">Masukkan angka antara 1-10.</span>
            </div>

            <button type="submit" class="btn btn-success mb-5">
                Hitung
            </button>
        </form>
    </div>
</body>
</html>
