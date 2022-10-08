<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>

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
    <!-- Header -->
    <?php include("./common/footer.php"); ?>
</body>

</html>