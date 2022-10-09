<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/userProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/root.css" />
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-2">


            </div>
            
            <div class="col-md-7  col-sm-8 adminContact-col">
                <form action="" class="form-horizontal hr adminContact-form">

                    <div class="myProfileTitle">My Profile</div>
                    <span class="userProfileConfirmbtnfloat">
                        <div class="profilebg">
                            <img src="./storages/download.jpg" alt="" class="userProfileUpdate">
                        </div>

                        <label for="userfile-upload" class="usercustom-file-upload">
                            <i class="fa-solid fa-camera"></i>
                        </label>
                        <input id="userfile-upload" type="file" />
                    </span>
                    <span>
                        <input type="button" value="Update" class="adminContactbtn">
                    </span>

                    <div class="form-group userProfileInputfloat">
                        <label for="username" class="userProfileLabel col-md-5">Username</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="John">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control adminContactInput" id="usernaem" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Phone Number</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="09-2150776">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Email Address</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" id="usernaem" placeholder="john@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Birthday</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control adminContactInput" id="usernaem" placeholder="1.3.1995">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Yangon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Male/Female</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Male/Female">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>