<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Knowledge List</title>
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/healthKnowList.css.css?v=<?= time() ?>">
    <link rel="stylesheet" href="./resources/css/all.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>

        <div class="row g-0">
            <div class="card ms-5 mt-3 col-md-5">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card-body">
                        <label for="" class="healthKtitle">Helath Knowledge title</label>
                            <p class="articaldetail">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer...</p>
                            <button class="btn-readmore">Read More> </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  mt-3">
                        <!-- <img src="..." class="rounded float-end" alt="..."> -->
                        <img src="./storages/detailP.png" class="rounded float-end" alt="DetailPhoto">
                    </div>
                </div>
            </div>
            <div class="card ms-5 mt-3 col-md-5">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card-body">
                        <label for="" class="healthKtitle">Helath Knowledge title</label>
                            <p class="articaldetail">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer...</p>
                            <button class="btn-readmore">Read More> </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  mt-3">
                        <!-- <img src="..." class="rounded float-end" alt="..."> -->
                        <img src="./storages/detailP.png" class="rounded float-end" alt="DetailPhoto">
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- Footer -->
        <?php include("./common/footer.php"); ?>
</body>

</html>