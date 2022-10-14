<?php

session_start();

$adminInfo = $_SESSION["adminInfo"];

// echo "<pre>";
// print_r($adminInfo);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/adminAboutUs.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/adminContact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />

    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .left_text {
            color: rgb(146, 141, 141);
            font-family: 'Poppins', sans-serif;
        }

        .right_text {
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }

        .profilePic {
            width: 150px;
            border-radius: 50%;
            box-shadow: 2px 2px 5px gray;
        }

        .title {
            font-size: 20px;
            font-weight: 700;
            font-family: 'Roboto', sans-serif;
            color: #188067;
        }

        td {
            column-width: 15rem;
        }

        table {
            line-height: 5rem;
        }

        .box {
            font-size: 16px;
            border: 1px solid rgb(185, 184, 184);
            padding: 2rem;
            max-width: 50rem;
            min-width: 25rem;
            height: 35rem;
            min-height: 30rem;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgb(197, 189, 189);
        }

        .container div {
            margin: 20px;
        }

        .btnUpdate {
            background-color: #188067;
            color: white;
            margin-right: 2rem
        }

        .buttons button {
            font-size: 20px;
            padding: 6px;
        }
    </style>
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>

    <div class="container d-flex flex-column justify-content-center align-items-center ">
        <div class="title">Admin Profile</div>
        <div class="d-flex justify-content-center m-3 mt-sm-3 mb-sm-3 mt-md-3 mb-md-3 mt-3 ">
            <img src="./image/user2-160x160.jpg" alt="" class="profilePic m-3 ms-md-auto ms-sm-auto">
        </div>
        <div class="box mt-3 ">
            <table>
                <tr>
                    <td class="left_text">E-mail</td>
                    <td class="right_text ">admin@gmail.com</td>
                </tr>
                <tr>
                    <td class="left_text">Password</td>
                    <td class="right_text">admin123</td>
                </tr>
                <tr>
                    <td class="left_text">Username</td>
                    <td class="right_text">July Moe</td>
                </tr>
                <tr>
                    <td class="left_text"> Phone No.</td>
                    <td class="right_text">0949289781</td>
                </tr>
                <tr>
                    <td class="left_text">Address</td>
                    <td class="right_text">Ahlone Township, Yangon</td>
                </tr>
            </table>
        </div>
        <div class="buttons d-flex">
            <a href="../Controller/profileEditController.php"><button type="button" class="btn btnUpdate">Update</button></a>
            <button type="button" class="btn btn-danger">Cancel</button>
        </div>
    </div>

    <!-- Footer -->
    <?php include("common/footer.php"); ?>
</body>

</html>