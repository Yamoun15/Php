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
                        <tr>
                            <td scope="row">1</td>
                            <td>Question</td>
                            <td><?php echo substr("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis corporis aspernatur, nostrum facere voluptas exercitationem illo, saepe libero sit maxime repellendus illum! Possimus reprehenderit similique quae ipsa assumenda, nostrum aliquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eum beatae fugit. Possimus consectetur saepe earum! Eos iusto numquam error commodi minima, exercitationem voluptatem, animi sapiente mollitia, sint odit ab?", 0, 50) ?>... </td>
                            <td>
                                <a href="./adminP&Pedit.php">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                </a>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <a href="./adminP&Pedit.php">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                </a>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <a href="./adminP&Pedit.php">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                </a>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <a href="./adminP&Pedit.php">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                </a>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <a href="./adminP&Pedit.php">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                </a>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-md-2 col-sm-2 "></div> -->
        </div>

        <div class="row">
            <div class="col-md-7 col-sm-5"></div>
            <div class="col-md-2 col-sm-5">
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
        <!-- Footer -->
        <?php include("common/footer.php"); ?>
</body>

</html>