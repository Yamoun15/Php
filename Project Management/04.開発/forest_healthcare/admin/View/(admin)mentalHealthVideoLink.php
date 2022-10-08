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
        body {
            background-color: #64D3A5;
        }

        .adminAbout-col {
            border-radius: 10px;
            padding: 15px;
        }

        /* .subtitleAboutus {
            font-size: 1.3em;
            font-family: poly !important;
            margin-bottom: 15px;
        }

        .selectBoxAboutus {
            border: 1px solid rgba(128, 128, 128, 0.619);
            border-radius: 5px;
            outline: none;
            box-sizing: border-box;
            height: 3em;
            margin-bottom: 20px;
        }

        #file-upload {
            display: contents;
        } */

        .custom-file-upload {
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            padding: 6px;
            cursor: pointer;
            /* margin-left: 30%;
            margin-top: 13%; */
            max-width: 170px;
            min-width: auto;
            height: 3rem;
            text-align: center;
            color: black;
            background-color: #F9C56B;
        }

        .container {
            max-width: 600px;
            border-radius: 10px;

        }

        .diseaseListTitle {
            font-weight: 600;
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            /* min-width: 250px; */
            max-width: 600px;
            margin-top: 20px;

        }

        .btnSave {
            background-color: #188067;
            color: white;
        }
    </style>
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>

    <div class=" diseaseListTitle mt-3 m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3 ms-auto mt-md-3 ">
        Admin >> Post >> Mental Health
    </div>
    <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3 ms-auto mt-md-3 mt-3">
        Add Youtube video Link
    </div>
    <div class="container m-auto ms-auto bg-white">
        <div class="row p-1">
            <div class="col-md-1 col-sm-1 col-1"></div>
            <div class="col-md-9  col-sm-9 col-9 adminAbout-col">
                <form action="" class="form-horizontal hr adminContact-form">
                    <div class="subtitleAboutus">Video Title</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="">
                        </div>
                    </div>

                    <div class="subtitleAboutus">YouTube Link</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <input type="button" value="Save" class="btn btnSave mt-3">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1 col-sm-1 col-1"></div>
        </div>
    </div>

    <div class="diseaseListTitle m-sm-auto mt-sm-3 m-3 mt-3 mb-3 mb-md-3 mb-sm-3">
        <a href="#">Click to edit and see the list</a>
    </div>
</body>

</html>