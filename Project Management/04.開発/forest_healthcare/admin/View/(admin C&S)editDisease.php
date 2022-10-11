<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/AdminDoctorList.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/adminContact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <style>
        body {
            
        }

        .adminAbout-col {
            border-radius: 10px;
            padding: 15px;
        }

        .subtitleAboutus {
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
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            padding: 6px;
            cursor: pointer;
            /* margin-left: 30%;
            margin-top: 13%; */
            max-width: 200px;
            min-width: auto;
            height: 3rem;
            text-align: center;
            color: black;
            background-color: #F9C56B;
        }

        .container {
            border-radius: 10px;
            max-width: 600px;
            min-height: 500px;
            background-color: white;
            margin-top: 3rem;
            box-shadow: 0px 2px 5px gray;
        }

        .diseaseListTitle {
            font-weight: 600;
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            /* min-width: 250px; */
            max-width: 600px;

        }

        .btnSave {
            background-color: #188067;
            color: white;
            padding: 10px !important;
            font-size: 20px !important;
            width: 200px;
            margin: auto;
        }

        .footer {
            background-color: #188067;
            height: 150px;
        }
        .content-wrapper{
            background-color: #64d3a5;
        }
    </style>
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Conditions & Services</span>
            <p class="content-header-text2"><small>Edit disease condtions</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>


    <!-- <div class="row float-sm-start ">
        <div class="diseaseListTitle  col-7 col-sm-6 ">
            Admin >> Post >> Conditions & Services
        </div>
        <div class="diseaseListTitle col-5 col-sm-6 ">
            Edit disease condtions
        </div>
    </div> -->
    <!-- form -->
    <div class="container mx-auto ">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-1"></div>
            <div class="col-md-9  col-sm- col-9 adminAbout-col">
                <form action="" class="form-horizontal hr adminContact-form">
                    <div class="subtitleAboutus">Topic Name</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="">
                        </div>
                    </div>

                    <div class="subtitleAboutus mt-3">Cover photo</div>
                    <div class="form-group">
                        <div class=" col-md-12 selectBoxAboutus">
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                Upload Image
                            </label>
                            <input id="file-upload" type="file" />
                        </div>
                    </div>

                    <div class="subtitleAboutus">Content detail</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea"></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mx-auto me-md-3 me-sm-3 ms-5">
                                <input type="button" value="Save Changes" class="btn btnSave mt-3 mx-auto">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1 col-sm-1 col-1"></div>
        </div>
    </div>

    <!-- <div class="footer d-flex justify-content-center align-items-center">
        <div class="diseaseListTitle   mx-auto m-sm-auto mt-sm-3 m-3 mt-md-3 mt-3">
            <a href="#">Click to edit and see the list</a>
        </div>
    </div> -->
    <!-- Footer -->
    <?php include("common/footer.php"); ?>

    <script src="./resources/js/adminAboutUs.js"></script>
</body>

</html>