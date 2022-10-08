<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/hAddDoctor.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/main.css?v=" <?= time() ?>>
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
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>



    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-2"></div>
            <div class="col-md-10 col-sm-10 mx-auto table-responsive">
                <form action="" class="form-horizontal hr adminContact-form">
                    <div class="form-group">

                        <div class="col-md-12">
                            <h4><b>Name</b></h4>

                            <input type="text" class="form-control doctorInput" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                                <a href="#"> Department</a>
                                <ul class="dropdown">
                                    <li><a href="#">Neurology</a></li>
                                    <li><a href="#">Neurology</a></li>
                                    <li><a href="#">Neurology</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <!-- <label for="username" class="control-label col-md-4">Username</label> -->
                        <div class="col-md-12">
                            <h4><b>Expert In</b></h4>

                            <input type="email" class="form-control doctorInput" placeholder="Expert In">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4><b>Mobile No</b></h4>

                            <input type="text" class="form-control doctorInput" placeholder="Mobile No">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4><b>Day</b></h4>

                            <input type="date" class="form-control doctorInput" placeholder="Day">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4><b>Start Time</b></h4>

                            <input type="text" class="form-control doctorInput" placeholder="Start Time">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4><b>End Time</b></h4>

                            <input type="text" class="form-control doctorInput" placeholder="End Time">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="username" class="control-label col-md-4">Username</label> -->
                        <div class="col-md-12">
                            <h4><b>Address</b></h4>

                            <textarea type="text" class="form-control adminContactTextarea" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <input type="button" value="Save" class="adminContactbtn">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-1 col-sm-1 col-2"></div>



            <!-- Footer -->
            <?php include("common/footer.php"); ?>

            <script src="./resources/js/adminAboutUs.js"></script>

</body>

</html>