<?php

session_start();

include "../Controller/userProfileUpdateController.php";
$patientInfo = $_SESSION["patientInfo"];

// echo "<pre>";
// print_r($patientInfo);

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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./resources/js/uploadProfile.js?v=" <?= time() ?> defer></script>
    <style>
        .modal-footer button {
            box-shadow: 0px 4px 5px gray;
            font-weight: 700;
        }

        .btnLogOut {
            background-color: #188067;
            color: white;
            text-decoration: none;
        }
        .btnLogOut:hover{
            color: white;
            background-color: #064536;
        }
        .logOut:hover{
            color: white;
            background-color: #064536;
        }
        .logOut{
            text-decoration: none;
            color: white;
        }
    </style>
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
                        <div><i class="fa-solid fa-user fs-5 mt-5 myProfile"></i></div>
                        <div><i class="fa-regular fa-calendar-check fs-5 mt-5"></i></div>
                        <div><i class="fa-solid fa-user-gear fs-5 mt-5"></i></div>
                        <div><i class="fa-solid fa-right-from-bracket fs-5 mt-5"></i></div>
                    </div>
                    <div class="col-6 fw-bold">
                        <div class=" mt-5"><a href="../Controller/userProfileEditController.php" class="myProfile">My Profile</a></div>
                        <div class=" mt-5"><a href="./apptHistory.php" class="text-dark">Appointment History</a></div>
                        <div class=" mt-5"><a href="" class="text-dark">Account Setting</a></div>
                        <div class="btn mt-5 mb-5 text-dark fw-bold text-decoration-underline" data-bs-toggle="modal" data-bs-target="#exampleModal"> Logout</div>
                    </div>
                </div>
            </div>
            <!--Log Out Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                            <div class="photo mx-auto ">
                                <img src="./storages/LogOut-logo.png" alt="" width="160px">
                            </div>
                            <div class="fw-bold fs-3 mt-3">Log Out?</div>
                            <div>Are you sure to leave?</div>
                        </div>
                        <div class="modal-footer mx-auto">
                            <button type="button" class="btn btn-danger btnCancel me-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btnLogOut"><a href="../Controller/logOutC.php" class="logOut">Log Out</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Log Out Modal -->

            <div class="col-md-7  col-sm-8 adminContact-col">
                <form action="../Controller/userProfileUpdateController.php" class="form-horizontal hr adminContact-form" method="post" enctype="multipart/form-data">

                    <div class="myProfileTitle">My Profile</div>
                    <span class="userProfileConfirmbtnfloat">
                        <div class="profilebg">
                            <img src="./storages/<?= $patientInfo[0]["photo"] ?>" alt="" id="profileImg" class="userProfileUpdate" name="photo">
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
                            <input type="text" class="form-control adminContactInput" id="username" value="<?= $patientInfo[0]["name"] ?>" placeholder="John" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Password<i class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></i></label>
                        <div class="col-md-12">
                            <input type="password" class="form-control adminContactInput" id="password" value="<?= $patientInfo[0]["password"] ?>" placeholder="password" name="password">



                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Phone Number</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" placeholder="09-2150776" value="<?= $patientInfo[0]["phone_no"] ?>" name="phone_no">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Email Address</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" placeholder="john@gmail.com" value="<?= $patientInfo[0]["email_address"] ?>" name="email_address" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Completed Age</label>
                        <div class="col-md-12">
                            <input type="number" min="1" class="form-control adminContactInput" placeholder="Age(Completed age)" value="<?= $patientInfo[0]["age"] ?>" name="age">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" placeholder="Yangon" value="<?= $patientInfo[0]["address"] ?>" name="address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="userProfileLabel col-md-5">Gender- <span class="text-dark"><?= $patientInfo[0]["gender"] ?></span></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" <?php echo ($patientInfo[0]["gender"] == 'Male') ?  "checked" : "";  ?>>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" <?php echo ($patientInfo[0]["gender"] == 'Female') ?  "checked" : "";  ?>>
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other" <?php echo ($patientInfo[0]["gender"] == 'Other') ?  "checked" : "";  ?>>
                            <label class="form-check-label" for="inlineRadio3">Other</label>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $patientInfo[0]["id"] ?>">
                </form>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>

</body>

</html>