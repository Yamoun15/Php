<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="home.css" /> -->
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        #nav1 {
            background-color: #43A391;
            height: 60px;
        }

        .nav1 {
            position: absolute;
            right: 35px;

        }

        .accIcon {
            position: absolute;
            top: 5px;
        }

        #nav2 {
            background-color: #64D3A5;
            height: 80px;
        }

        #logo {
            width: 80px;
        }

        .myprofile {
            width: 20px;
        }

        .useraccMenubox {
            position: absolute;
            width: 327px;
            height: 330px;
            left: 89px;
            top: 200px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 29px;
        }

        .useraccMenu {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            margin-left: 40px;
            font-size: 1.3 em;
        }

        .apptHistory {
            color: #188067;
        }

        .accitem {
            margin-top: 25px;

        }

        .useraccicon {
            margin-top: 35px;
        }
    </style>


</head>

<body>


<nav class="navbar navbar-expand-lg fs-6 fw-bold " id="nav1">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo.png" id="logo" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Login/SignUp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Appointment</a></li>
                            <li><a class="dropdown-item" href="#">Conditions</a></li>
                            <li><a class="dropdown-item" href="#">Health Knowledge</a></li>
                            <li><a class="dropdown-item" href="#">Mental Health</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact Us
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="#">Privacy & Policy</a></li>
                        </ul> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg fs-6 fw-bold text-light" id="nav1">
        <div class="container-fluid">

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav nav1">
                    <li class="nav-item  me-5 ">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-5 ">
                        <a class="nav-link text-light" href="#">Login/SignUp</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-light" href="#">Appointment</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-light">Contact Us</a>
                    </li>
                    <li class="nav-item me-5">
                        <i class='far fa-user-circle accIcon' style='font-size:27px;color:white'></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 -->



    <!-- Headernav2 -->
    <!-- <nav class="navbar navbar-expand-lg fs-5 fw-bold text-light" id="nav2">
        <div class="container-fluid">
            <img src="logo.png" id="logo" alt="">

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item  ms-5">
                        <a class="nav-link active text-light" aria-current="page" href="#">Doctor</a>
                    </li>
                    <li class="nav-item  ms-5">
                        <a class="nav-link text-light" href="#">Condition & Service</a>
                    </li>
                    <li class="nav-item  ms-5">
                        <a class="nav-link text-light" href="#">Health Knowledge</a>
                    </li>
                    <li class="nav-item  ms-5">
                        <a class="nav-link text-light">Mental Health</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg fs-6 fw-bold " id="nav1">
        <div class="container-fluid"> -->
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav1">
                    <li class="nav-item ">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Login/SignIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Appointment</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class='far fa-user-circle accIcon' style='font-size:27px;color:white'></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login/SignUp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="#">Privacy & Policy</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav> -->

    <!-- <nav class="navbar navbar-expand-lg fs-6 fw-bold ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav nav1">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    <a class="nav-link text-light" href="#">Login/SignUp</a>
                    <a class="nav-link text-light" href="#">Appointment</a>
                    <a class="nav-link text-light">Contact Us</a>
                    <a class="nav-link text-light"><i class='far fa-user-circle accIcon' style='font-size:27px;color:white'></i></a>
                </div>
            </div>
        </div>
    </nav> -->

</body>