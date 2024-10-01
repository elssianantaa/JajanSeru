<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-sm" style="background-color: #FFF0DD;">
            <div class="container">
                <a href="#" class="navbar-brand" style="font-weight: bold;color: #B0464A;font-size: 30px;">JajanSeru</a>
                <div class="justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#Food" class="nav-link">Foods</a>
                        </li>

                        <li class="nav-item">
                            <a href="#aboutus" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>