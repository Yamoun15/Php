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

</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>



    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-2"></div>
            <div class="col-md-10 col-sm-10 mx-auto table-responsive">

                <table class="table">
                    <thead class="doctorTable">
                        <tr class="title">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Department</th>
                            <th scope="col">Expert In</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile No</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dr.John</td>
                            <td<img src="./image/user2-160x160.jpg">
                                <td>
                                <td>Neurology</td>
                                <td>neurologist</td>
                                <td>johnwick@gmail.com</td>
                                <td>091234567</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Dr.John</td>
                            <td<img src="./image/user2-160x160.jpg">
                                <td>
                                <td>Neurology</td>
                                <td>neurologist</td>
                                <td>johnwick@gmail.com</td>
                                <td>091234567</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Dr.John</td>
                            <td<img src="./image/user2-160x160.jpg">
                                <td>
                                <td>Neurology</td>
                                <td>neurologist</td>
                                <td>johnwick@gmail.com</td>
                                <td>091234567</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Dr.John</td>
                            <td<img src="./image/user2-160x160.jpg">
                                <td>
                                <td>Neurology</td>
                                <td>neurologist</td>
                                <td>johnwick@gmail.com</td>
                                <td>091234567</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Dr.John</td>
                            <td<img src="./image/user2-160x160.jpg">
                                <td>
                                <td>Neurology</td>
                                <td>neurologist</td>
                                <td>johnwick@gmail.com</td>
                                <td>091234567</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Dr.John</td>
                            <td<img src="./image/user2-160x160.jpg">
                                <td>
                                <td>Neurology</td>
                                <td>neurologist</td>
                                <td>johnwick@gmail.com</td>
                                <td>091234567</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

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

        <script src="./resources/js/adminAboutUs.js"></script>

</body>

</html>