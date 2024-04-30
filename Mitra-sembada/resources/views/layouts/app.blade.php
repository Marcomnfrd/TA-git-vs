<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajiwa Mitra Sembada</title>
    <style>
        /* Style untuk navbar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #666;
            color: white;
        }

        .navbar img {
            display: inline-block;
            height: 40px;
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Style untuk konten */
        .container {
            margin-top: 20px;
        }

        /* Responsif */
        @media screen and (max-width: 600px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }

            .navbar {
                overflow: auto;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <img src="logo.png" alt="Logo">
            <a href="/">Home</a>
            <a href="/products">Products</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
