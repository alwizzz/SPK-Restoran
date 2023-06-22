<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
        <h1>Result Page</h1>

        <div class="result-text">
            <p>Result:</p>
            <p class="result-value">Oioioi</p> <!-- Ganti dengan nilai hasil yang sesuai -->
        </div>

        <div class="go-back">
            <a href="index.html">Go Back</a>
        </div>
    </div>
</body>
</html>
