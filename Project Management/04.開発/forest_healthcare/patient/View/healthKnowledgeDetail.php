<?php

include "../Controller/articleDetailC.php";
$articleInfo =  $_SESSION["articleInfo"];
// print_r($articleInfo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Knowledge Detail</title>
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/healthKnowDetail.css">
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
            <div class="col-1 col-md-1 col-sm-1"></div>
            <div class="col-10 col-md-10 col-sm-10 mt-5 text-center">
                <strong for="" class="healthKtitle"><?= $articleInfo[0]["title"] ?></strong>
            </div>
            <div class="col-1 col-md-1 col-sm-1">
                <a href="../View/healthKnowledgeList.php" class="back">back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-6 col-sm-6">
                <img src="./storages/<?= $articleInfo[0]["photo"] ?>" class="img" alt="" srcset="">
            </div>
            <!-- <div class="col-6 col-md-6 col-sm-6">
                <img src="./storages/healthKPhoto.png" class="img w-50" alt="" srcset="">
            </div> -->
        </div>

        <p class="articaldetail"><?= $articleInfo[0]["description"] ?></p>
        <!-- <p class="articaldetail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, delectus voluptatibus tempore quo obcaecati iure maiores, iusto aut aliquid dolorem eveniet reiciendis, consectetur explicabo mollitia harum rem? Quis veniam sint explicabo ratione error nulla soluta vero voluptates voluptate perspiciatis neque consequatur quibusdam eos harum rem quam saepe facere eligendi omnis natus sed quidem facilis, porro ipsum? Et delectus eum dolore recusandae, perspiciatis asperiores voluptatibus quam temporibus, repellendus deserunt facere id atque commodi pariatur optio sequi in. Porro cum, cupiditate qui animi libero accusantium dignissimos deleniti, quae modi tempora blanditiis ad. Fugit ratione voluptatem debitis sapiente obcaecati ullam neque, officiis eveniet maiores voluptate suscipit delectus necessitatibus deserunt ipsam ipsa aperiam, quasi atque est dolores reprehenderit eum aliquam distinctio dignissimos vitae! Incidunt voluptate id, veritatis, saepe nihil ipsum vel perspiciatis delectus doloremque ut ipsam inventore maxime totam? Facilis nesciunt hic nisi nulla cupiditate obcaecati consectetur non voluptatem, dignissimos molestias saepe ea recusandae!</p> -->
        <!-- <p class="articaldetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam saepe culpa autem omnis provident a in iste quis, totam, consectetur ab, voluptas nostrum dignissimos vel nesciunt. At sunt voluptate harum possimus placeat dolorem laboriosam illo qui, est delectus nemo atque nulla? Voluptas illo quae a repellendus omnis tempore? Est dignissimos, quaerat necessitatibus, explicabo odio suscipit esse ullam, nemo nisi earum molestias? Neque numquam laborum, recusandae nostrum perferendis praesentium expedita tempore odio omnis quis autem distinctio doloribus vel? Fugiat suscipit voluptates, laudantium nesciunt illum sequi officia, doloremque sapiente, ab repudiandae perferendis nobis ratione unde numquam minus explicabo nostrum quae eaque excepturi.</p> -->
    </div>

    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>