<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: DodgerBlue;
            padding: 10px 0;
        }

        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        ul.navbar li {
            display: inline;
            margin-left: 20px;
        }

        ul.navbar li a {
            text-decoration: none;
            color: White;
        }

        ul.navbar li button {
            background-color: Violet;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            color: White;
        }

        ul.navbar li button a {
            color: White;
            text-decoration: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        footer {
            background-color: DodgerBlue;
            color: White;
            text-align: center;
            padding: 10px 0;
            margin-top: 25%
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <ul class="navbar">
                <li><button><a href="/home">Home</a></button></li>
                <li><button><a href="/">About</a></button></li>
                <li><button><a href="/">Services</a></button></li>
                <li><button><a href="/login">Login</a></button></li>
                <li><button><a href="/signup">Signup</a></button></li>
            </ul>
        </div>
    </header>

    <div class="container">
        {{-- Content will go here --}}
        @yield('msg')
        @yield('content')
        @yield('sidebar')
    </div>

    <footer>
        <div class="container">
            <h1>Footer</h1>
        </div>
    </footer>
</body>
</html>
