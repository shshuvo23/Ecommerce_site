<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">OTMS</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">HOME</a> </li>
                <li><a href="" class="nav-link">ABOUT</a> </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Training Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item"></a> </li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">ALL TRAINING</a> </li>
                <li><a href="" class="nav-link">CONTACT</a> </li>
                    <li><a href="{{route('login-registration')}}" class="nav-link">LOGIN/REGISTRATION</a> </li>

            </ul>
        </div>
    </nav>

    @yield('body')




    <script src="{{asset('/')}}website/js/jquery-3.6.1.js"></script>
    <script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>

</body>
</html>
