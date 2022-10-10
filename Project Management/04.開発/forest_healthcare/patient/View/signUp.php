<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <link rel="stylesheet" href="./resources/css/signupLogin.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row  g-0 ">
            <div class="login_logo  me-5">
                <img src="./storages/loginLogo.png" alt="" srcset="">
                <label for="" class="me-5 ms-5"><a href="http://">Home</a></label>
                <label for="" class="me-5"><u>About Us</u></label>
                <label for=""><u>Contact Us</u></label>
            </div>
            <div class="row  g-0 mt-5">
                <div class="col-1 col-md-1 "></div>
                <div class="col-md-5 col-sm-5">
                    <div class="simple-login-container">
                        <div class="row  g-0 ms-3 mb-3 ">
                            <div class="col-md-1 col-sm-1"></div>
                            <div class="col-md-5 col-sm-5 ">
                                <button class="dbtnlogin fs-5 fw-5" disabled>Login</button>
                            </div>
                            <div class="col-md-6 col-sm-5 mb-4">
                                <button class="btnsignup fs-5">Sign Up</button>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 mb-4 ">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-md-12 col-sm-12 mb-4 ">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-md-12 col-sm-12 mb-4">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>

                        <div class="row ">
                            <div class="col-md-1 col-sm-1"></div>
                            <div class="col-md-8 col-sm-8">
                            </div>
                            <!-- <div class="col-md-1 col-sm-1"></div> -->
                            <div class="col-md-2 col-sm-2">
                                <button class="btnsignup ">Signup</button>
                            </div>
                        </div>
                        <div class="login_image col-md-6 col-sm-6">
                            <img class="loginimg" src="./storages/loginPhoto.png" alt="Login Photo" srcset="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>