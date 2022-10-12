<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Detail</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="./resources/bootstrap/js/bootstrap.min.js" defer></script>
    <!-- FontAwesome 4.3.0 for dashboard -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" /> 
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">  
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/patientDetail.css?v=<?= time() ?> ">
    <!-- root css -->
    <link rel="stylesheet" href="./resources/css/root.css">
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?> 
    <br>

    <!-- body -->
    <div class="">
        <div class="row title">
            <div class="col-12 col-md-12 col-sm-12">
                <p class="text-center">Patient's Detail </p>
            </div>
        </div>
        <div class="row pdBodybgcolor">
            <div class="col-2 col-md-2 col-sm-2"></div>
            <div class="col-3 col-md-3 col-sm-3 ms-3">
                <p>Patient Name</p>
                <p>Phone No</p>
                <p>Age</p>
                <p>Gender</p>
                <p>State</p>
                <p>Township</p>
                <p>Description</p>
            </div>

            <div class="col-5 col-md-5 col-sm-5 ms-4">
                <p>:U Zaw Zaw</p>
                <p>:09-674687343</p>
                <p>:65</p>
                <p>:Male</p>
                <p>:Mon</p>
                <p>:Kyailmayaw</p>
                <p>:Lorem soluta sequi eaque, eat, mollitia iusto. Aliquam nulla, et officia laudantium doloremque reiciendis dolorem accusamus sint perspiciatis nesciunt sit maiores error eligendi ullam quidem in beatae similique adipisci dolorum?</p>
            </div>
            <div class="col-2 col-md-2 col-sm-2"></div>
        </div>
    </div>
</body>

</html>