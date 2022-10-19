<?php
include "../Controller/adminP&PListController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/adminP&Plist.css">
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
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
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Privacy & Policy List</span>
            <p class="content-header-text2"><small>Privacy & Policy List Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Privacy & Policy List</li>
        </ol>
    </section>
    <!-- Header -->

    <div class="container">
        <div class="row mainadminPPaddtitle">
            <div class="col-4">
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-3">
                        <a href="./adminP&Padd.php"><button class="btn adminppaddbtn">Add</button></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 col-sm-1 "></div>
            <div class="col-md-8 col-sm-10 table-responsive">
                <table class="table tableBodyBg">
                    <thead class="adminPPlistheaderbg">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($policyList as $key => $policy) { ?>
                            <tr>
                                <td scope="row"><?= $count++; ?></td>
                                <td><?= $policy["title"] ?></td>
                                <td><?php echo substr($policy["description"], 0, 6) ?>... </td>
                                <td>
                                    <span>
                                        <a href="../Controller/adminP&PEditController.php?id=<?= $policy["id"] ?>"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></a>
                                    </span>
                                    <span>
                                        <a href="../Controller/adminP&PDeleteController.php?id=<?= $policy["id"] ?>"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></a>
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-md-2 col-sm-2 "></div> -->
        </div>

        <div class="row">
            <div class="col-md-7 col-sm-4"></div>
            <div class="col-md-4 col-sm-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item 
                    <?php if ($page <= 1) {
                        echo "disabled";
                    }  ?>
                    ">
                            <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                            <li class="page-item 
                        <?php
                            if ($page == $i) {
                                echo "active";
                            }
                        ?>
                        "><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php } ?>

                        <li class="page-item 
                    <?php if ($page >= $totalPages) {
                        echo "disabled";
                    }  ?>">

                            <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Footer -->
        <?php include("common/footer.php"); ?>
</body>

</html>