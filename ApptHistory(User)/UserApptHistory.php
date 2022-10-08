<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css" />
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        #nav1 {
            background-color: #43A391;
            height: 50px;
        }

        .nav1 {
            position: absolute;
            right: 35px;

        }

        .accIcon{
            position: absolute;
            top:5px;
        }

        #nav2 {
            background-color: #64D3A5;
            height: 80px;
        }

        #logo {
            width: 110px;
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

        /* footer */
        .footer {
            background-color:  #43A391;
            position: relative;
            top: 610px;
        }

        .vision {
            width: 262px;
            font-size: 15px;
        }
        .pagination {
            position: relative;
            top: 500px;
        }


        .logo {
            width: 100px;
        }

        /* table */
        .table {
            position: absolute;
            width: 846px;
            height: 62px;
            left: 477px;
            top: 200px;
        }

        .title {
            background: #188067;
            color: white;

        }

        /* viewbutton */
        .btnview {
            width: 88px;
            height: 36px;
            background: #188067;
            border-radius: 12px;
            border: none;
            border-bottom: 1px solid #161817;
            color: white;
        }
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-lg fs-6 fw-bold text-light" id="nav1">
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
    <!-- Headernav2 -->
    <nav class="navbar navbar-expand-lg fs-5 fw-bold text-light" id="nav2">
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
    <!-- myprofilebox -->

    <!-- <ul class="nav flex-column ">
            <li class="accitem">
                <a class="nav-link active" aria-current="page" href="#">My Profile</a>
            </li>
            <li class="accitem">
                <a class="nav-link" href="#">Appointment Hitory</a>
            </li>
            <li class="accitem">
                <a class="nav-link" href="#">Saved</a>
            </li>
            <li class="accitem">
                <a class="nav-link">Account Setting</a>
            </li>
            <li class="accitem">
                <a class="nav-link">Logout</a>
            </li>
        </ul>
    </div> -->

    <div class="useraccMenubox">
        <div class="useraccMenu fw-bold">
            <div class="useraccMenuboxIcon">
                <ul class="nav flex-column ">
                    <li class="1">
                        <i class='fas fa-user-alt' style='font-size:30px'></i>
                    </li>
                    <li class="1">
                        <i class='far fa-calendar-check' style='font-size:30px;color:#188067'></i>

                    </li>
                    <li class="1">
                        <i class='fas fa-bookmark' style='font-size:30px'></i>
                    </li>
                    <li class="1">
                        <i class='fas fa-user-cog' style='font-size:30px'></i>

                    </li>
                    <li class="1">
                        <i class="material-icons" style="font-size:30px">exit_to_app</i>

                    </li>
                </ul>
            </div>

            <div class="useraccMenuText">
                <ul class="nav flex-column ">
                    <li class="accitem">
                        <a class="nav-link active text-dark" aria-current="page" href="#">My Profile</a>
                    </li>
                    <li class="accitem">
                        <a class="nav-link apptHistory" href="#">Appointment Hitory</a>
                    </li>
                    <li class="accitem">
                        <a class="nav-link text-dark" href="#">Saved</a>
                    </li>
                    <li class="accitem">
                        <a class="nav-link text-dark">Account Setting</a>
                    </li>
                    <li class="accitem">
                        <a class="nav-link text-dark">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <table class="table">
        <thead>
            <tr class="title">
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Doctor</th>
                <th scope="col">Date&Time</th>
                <th scope="col">Details</th>
                <th scope="col">Status</th>
                <th scope="col">QR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Dr.John</td>
                <td>9AM-11AM(SUN)</td>
                <td><button class="btnview">View</button></td>
                <td>Approved</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Dr.John</td>
                <td>9AM-11AM(SUN)</td>
                <td><button class="btnview">View</button></td>
                <td>Approved</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Dr.John</td>
                <td>9AM-11AM(SUN)</td>
                <td><button class="btnview">View</button></td>
                <td>Canceled</td>
                <td>---</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Dr.John</td>
                <td>9AM-11AM(SUN)</td>
                <td><button class="btnview">View</button></td>
                <td>Canceled</td>
                <td>---</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Dr.John</td>
                <td>9AM-11AM(SUN)</td>
                <td><button class="btnview">View</button></td>
                <td>Pending</td>
                <td>---</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Dr.John</td>
                <td>9AM-11AM(SUN)</td>
                <td><button class="btnview">View</button></td>
                <td>Pending</td>
                <td>---</td>
            </tr>
        </tbody>
    </table>
    <!-- footer -->
    <nav class="navbar navbar-expand-lg  footer">
        <div class="container-fluid">
            <img src="logo2.1.png" id="logo" alt="">
            <span class="vision text-light ms-3">To be a trusted health care provider that provides reliable health information to make healthier and happier decisions. </span>

            <div class="collapse navbar-collapse fs-6  fw-bold" id="navbarNav">
                <ul class="navbar-nav nav1">
                    <li class="nav-item  ms-5">
                        <a class="nav-link active text-light" aria-current="page" href="#">Privacy&Policy</a>
                    </li>
                    <li class="nav-item  ms-5">
                        <a class="nav-link text-light" href="#">About US</a>
                    </li>
                    <li class="nav-item  ms-5">
                        <i class='fab fa-facebook-f' style='font-size:27px;color:white'></i>
                    </li>
                    <li class="nav-item  ms-5">
                        <i class='fab fa-twitter' style='font-size:27px;color:white'></i>
                    </li>
                    <li class="nav-item  ms-5">
                        <i class='fab fa-instagram' style='font-size:27px;color:white'></i>
                    </li>
                    <li class="nav-item  ms-5">
                        <i class='fab fa-linkedin' style='font-size:27px;color:white'></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>