<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-image: url({{ asset('images/Image.png') }}); background-size: cover;">
    <nav class="navbar navbar-expand bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Laravel CA</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item" style="margin-left: 250px;">
                        <a class="nav-link text-white" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="{{ route('loginBlade') }}">Login</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="{{ route('registerBlade') }}">Register</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row m-auto ms-5">
            <div class="col-4 mt-5">
                <div class="card" style="width: 20em;">
                    <img src="{{ asset('images/shafee/15.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ShaF</h5>
                        <p class="card-text">Trip to Nuwera</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 20em;">
                    <img src="{{ asset('images/shafee/13.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ShaF</h5>
                        <p class="card-text">Trip to Kandy</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 20em;">
                    <img src="{{ asset('images/shafee/14.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ShaF</h5>
                        <p class="card-text">Trip to Kandy</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>