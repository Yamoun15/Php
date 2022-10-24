<?php

include "../Controller/articleListController.php";

// echo "<pre>";
// print_r($articleList);

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

    <link rel="stylesheet" href="./resources/css/articleList.css">
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Health Knowledge</span>
            <p class="content-header-text2"><small>List of Health article</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
            Admin >> Post >> Conditions & Services
        </div>
        <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
            List of Conditions
        </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 table-responsive">
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
                        <!-- <tr>
                    <th scope="row">1</th>
                    <td>Eat healthy Stay healthy</td>
                    <td>Dr.John.png</td>
                    <td>The Definitive Guide to Healthy
                        Eating in Real Life...</td>
                    <td> <a href="(admin HKNWL)editArticle.php"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                </tr> -->

                        <?php $count = 1; ?>
                        <?php foreach ($articleList as $key => $article) { ?>
                            <tr>
                                <td><?= $count++; ?>.</td>
                                <td><?php echo substr($article["title"], 0, 100) ?>...</td>
                                <td><?= $article["photo"] ?></td>
                                <td><?php echo substr($article["description"], 0, 50) ?>...</td>
                                <td><a href="../Controller/articleEditController.php?ID=<?= $article['id'] ?>"><i class="fa-solid fa-pen-to-square editBtn"></i></a> <a href="#"><i class="fa-solid fa-trash-can trashBtn"></i></a></td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
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
    </div>
            <!-- Footer -->
            <?php include("common/footer.php"); ?>

            <script src="./resources/js/adminAboutUs.js"></script>
</body>

</html>