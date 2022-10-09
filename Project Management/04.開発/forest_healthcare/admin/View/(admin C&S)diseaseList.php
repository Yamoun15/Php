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
            background-color: #64D3A5;
        }

        #nav1 {
            background-color: #43A391;
            height: 50px;
        }

        .nav1 {
            position: absolute;
            right: 35px;
        }

        #accicon {
            position: absolute;
            top: 5px;
            width: 30px;
        }

        #nav2 {
            background-color: #64D3A5;
            height: 80px;
        }

        #logo {
            width: 110px;
        }

        .myprofile {
            width: 20px;
        }

        .useraccMenubox {
            position: absolute;
            width: 327px;
            height: 330px;
            left: 89px;
            top: 200px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 29px;
        }

        .useraccMenu {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            margin-left: 40px;
            font-size: 1.3 em;
        }

        .apptHistory {
            color: #188067;
        }

        .accitem {
            margin-top: 25px;

        }

        .useraccicon {
            margin-top: 35px;
        }

        /* footer */
        .pagination {
            position: relative;
            top: 670px;
        }

        .footer {
            background-color: #43A391;
            position: relative;
            top: 610px;
        }

        .vision {
            width: 262px;
            font-size: 15px;
        }

        .logo {
            width: 100px;
        }

        .diseaseListTitle {
            font-weight: 600;
            background-color: white;
            border-radius: 20px;
            padding: 15px;
            min-width: 300px;
            max-width: 500px;
            margin: 1rem 0 0 25rem;
        }

        /* table */
        .table {
            box-shadow: 0px 2px 5px gray;
        }

        .title {
            padding: 10px !important;
            background: #188067;
            color: white;
            text-align: center;
        }

        tr {
            background-color: white;
            color: black;
        }

        td {
            text-align: center;
        }

        .editBtn {
            color: #188067;
            margin-right: 15px;
        }

        .trashBtn {
            color: #F55858;
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
            <p class="content-header-text2"><small>List of Conditions</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <body>


        <!-- <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
            Admin >> Post >> Conditions & Services
        </div>
        <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
            List of Conditions
        </div> -->
        <table class="table-responsive table mt-3">
            <thead>
                <tr class="title">
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Content</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Barrhet's oesophagus</td>
                    <td>Dr.John.png</td>
                    <td>Its about aphaxia...</td>
                    <td> <a href="#"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Barrhet's oesophagus</td>
                    <td>Dr.John.png</td>
                    <td>Its about aphaxia...</td>
                    <td> <a href="#"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Barrhet's oesophagus</td>
                    <td>Dr.John.png</td>
                    <td>Its about aphaxia...</td>
                    <td> <a href="#"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Barrhet's oesophagus</td>
                    <td>Dr.John.png</td>
                    <td>Its about aphaxia...</td>
                    <td> <a href="#"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Barrhet's oesophagus</td>
                    <td>Dr.John.png</td>
                    <td>Its about aphaxia...</td>
                    <td> <a href="#"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="mb-5 d-flex justify-content-lg-center">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- footer -->
        <nav class="navbar navbar-expand-lg  footer">
            <div class="container-fluid">
                <img src="logo2.1.png" id="logo" alt="">
                <span class="vision text-light ms-3">To be a trusted health care provider that provides reliable health
                    information to make healthier and happier decisions. </span>

                <div class="collapse navbar-collapse fs-6  fw-bold" id="navbarNav">
                    <ul class="navbar-nav nav1">
                        <li class="nav-item  ms-5">
                            <a class="nav-link active text-light" aria-current="page" href="#">Privacy&Policy</a>
                        </li>
                        <li class="nav-item  ms-5">
                            <a class="nav-link text-light" href="#">About US</a>
                        </li>
                        <li class="nav-item  ms-5">
                            <i class='fab fa-facebook-f' style='font-size:27px;color:white'></i>
                        </li>
                        <li class="nav-item  ms-5">
                            <i class='fab fa-twitter' style='font-size:27px;color:white'></i>
                        </li>
                        <li class="nav-item  ms-5">
                            <i class='fab fa-instagram' style='font-size:27px;color:white'></i>
                        </li>
                        <li class="nav-item  ms-5">
                            <i class='fab fa-linkedin' style='font-size:27px;color:white'></i>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Pagination -->
        <div class="row">
            <div class="col-md-9 col-sm-5"></div>
            <div class="col-md-3 col-sm-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-1 col-sm-1 col-2"></div>



        <!-- Footer -->
        <?php include("common/footer.php"); ?>

        
    </body>

</html>