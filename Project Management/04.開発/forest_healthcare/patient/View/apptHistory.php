<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/apptHistory.css" />

    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <!-- Header -->

    <div class="row mt-3">
        <div class="col-lg-3 ms-5">
            <div class="row  menubox">
                <div class="col-2 offset-2">
                    <div><i class="fa-solid fa-user fs-5 mt-5"></i></div>
                    <div><i class="fa-regular fa-calendar-check fs-5 mt-5"></i></div>
                    <div><i class="fa-solid fa-user-gear fs-5 mt-5"></i></div>
                    <div><i class="fa-solid fa-right-from-bracket fs-5 mt-5"></i></div>
                </div>
                <div class="col-6 fw-bold">
                    <div class=" mt-5"><a href="" class="text-dark">My Profile</a></div>
                    <div class=" mt-5"><a href="" class="text-dark">Appointment History</a></div>
                    <div class=" mt-5"><a href="" class="text-dark">Account Setting</a></div>
                    <div class="mt-5 mb-5"> <a href="" class="text-dark">Logout</a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
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
        </div>
    </div>
    <!-- footer -->
    <?php include("./common/footer.php"); ?>
    <!-- footer -->

</body>

</html>

<!-- offcanvas -->
<!-- <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="alert alert-info d-none d-lg-block">Resize your browser to show the responsive offcanvas toggle.</div>
                <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p class="mb-0">This is content within an <code>.offcanvas-lg</code>.</p>
                    </div>
                </div> -->
<!-- </div>