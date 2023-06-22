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
        <h1>Hasil</h1>

        <div class="go-back">
            <a href="/">Go Back</a>
        </div>
        <div class="result-text">
            <p>Top 10 Rangking</p>
        </div>

        
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Ranking</th>
                <th scope="col">Alternatif</th>
                <th scope="col">Score</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($score as $s)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s['nama'] }}</td>
                        <td>{{ $s['score'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <p>Rangking lainnya...</p>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Ranking</th>
                <th scope="col">Alternatif</th>
                <th scope="col">Score</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($score_all as $s)
                    @if($loop->iteration > 10)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s['nama'] }}</td>
                            <td>{{ $s['score'] }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

            
        
    </div>

    
</body>
</html>
