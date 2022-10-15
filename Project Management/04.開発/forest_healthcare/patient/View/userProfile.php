<?php

session_start();

$patientInfo = $_SESSION["patientInfo"];

// echo "<pre>";
// print_r($patientInfo);
// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/userProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
<script src="./resources/js/uploadProfile.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-2 ">
                <br>
            <div class="row menubox">
                <div class="col-2 offset-2">
                    <div><i class="fa-solid fa-user fs-5 mt-5"></i></div>
                    <div><i class="fa-regular fa-calendar-check fs-5 mt-5"></i></div>
                    <div><i class="fa-solid fa-user-gear fs-5 mt-5"></i></div>
                    <div><i class="fa-solid fa-right-from-bracket fs-5 mt-5"></i></div>
                </div>
                <div class="col-6 fw-bold">
                    <div class=" mt-5"><a href="../Controller/userProfileEditController.php" class="text-dark">My Profile</a></div>
                    <div class=" mt-5"><a href="" class="text-dark">Appointment History</a></div>
                    <div class=" mt-5"><a href="" class="text-dark">Account Setting</a></div>
                    <div class="mt-5 mb-5"> <a href="" class="text-dark">Logout</a></div>
                </div>
            </div>
            </div>
            
            <div class="col-md-7  col-sm-8 adminContact-col">
                <form action="../Controller/userProfileUpdateController.php" class="form-horizontal hr adminContact-form" method="post" enctype="multipart/form-data">

                    <div class="myProfileTitle">My Profile</div>
                    <span class="userProfileConfirmbtnfloat">
                        <div class="profilebg">
                            <img src="./storages/<?= $patientInfo[0]["profile_image"]?>" alt="" id="profileImg"  class="userProfileUpdate" name="profile_image">
                        </div>

                        <label for="userfile-upload" class="usercustom-file-upload">
                            <i class="fa-solid fa-camera"></i>
                        </label>
                        <input id="userfile-upload" type="file" onchange="setImage()" name="uploadFile" />
                    </span>
                    <span>
                        <input type="submit" value="Update" class="adminContactbtn" name="updateProfile">
                    </span>

                    <div class="form-group userProfileInputfloat">
                        <label for="username" class="userProfileLabel col-md-5">Username</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="username" value="<?= $patientInfo[0]["name"] ?>" placeholder="John" name="name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control adminContactInput" id="usernaem" value="<?= $patientInfo[0]["password"] ?>" placeholder="password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Phone Number</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="09-2150776" value="<?= $patientInfo[0]["phone_no"] ?>" name="phone_no" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Email Address</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" id="usernaem" placeholder="john@gmail.com" value="<?= $patientInfo[0]["email_address"] ?>" name="email_address" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Birthday</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control adminContactInput" id="usernaem" placeholder="1.3.1995" value="<?= $patientInfo[0]["date_of_birth"] ?>" name="date_of_birth">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Yangon" value="<?= $patientInfo[0]["address"] ?>" name="address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Male/Female</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Male/Female" value="<?= $patientInfo[0]["gender"] ?>"  name="gender">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $patientInfo[0]["id"] ?>" >
                </form>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>