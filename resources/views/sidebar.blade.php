<!DOCTYPE html>
<html>
<head>
    <title>Sidebar Instagram-like</title>
    <style>
        /* Gaya Dasar */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .sidebar {
            background-color: #161b22;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            border-right: 1px solid #ddd;
        }
        
        .sidebar h1 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar ul li {
            margin-bottom: 10px;
        }
        
        .sidebar ul li a {
            color: #e1e1e1;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            padding: 10px;
            border-radius: 8px;
        }
        
        .sidebar ul li a .icon {
            margin-right: 10px;
        }
        
        .sidebar ul li a:hover {
            background-color: #36404b;
        }
        
        /* Tampilan Hover Sub Kategori */
        .sidebar ul li ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            margin-left: 20px;
            display: none;
        }
        
        .sidebar ul li:hover ul {
            display: block;
        }
        
        .sidebar ul li ul li {
            margin-bottom: 5px;
        }
        
        .sidebar ul li ul li a {
            color: #d2d2d2;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .sidebar ul li ul li a:hover {
            background-color: #36404b;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>WeRace</h1>
        <ul>
            <li><a href="/"><span class="icon">&#x1F3E9;</span> Input</a></li>
            <li><a href="/detail"><span class="icon">&#x1F4DD;</span> Detail</a></li>
        </ul>
    </div>
</body>
</html>
