<?php

include "../Controller/videoListC.php";
$videoList = $_SESSION["videoList"];
// print_r($videoList);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health List</title>
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/mentalHealthList.css?v=<?= time() ?>">
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

    <div>
        <img src="./storages/mentalHealthPhoto.png" alt="mental health phpto" class="mhdiv" srcset="">
    </div>
    <div class="row pluse-parent">
        <div class="col-5 col-md-5 col-sm-5"></div>
        <div class="col-2 col-md-2 col-sm-2">
            <label for="" class="plusebtn text-center text-white">PLUSE ||</label>
        </div>
    </div>

    <div class="container-fluid mt-5 mx-auto text-center">
        <h3 class="mb-5">You Deserve To Take A Break</h3>

        <div class="cards">
            <div class="card-body ">
                <a href="<?=$videoList[0]["youtube_link"] ?>" class=" card1 mb-sm-5 mb-5 mb-md-0">
                    <div class="text text-decoration-none">Halo of love</div>
                </a>

                <div class=" card2">
                    <div class="text">Letting go</div>
                </div>
            </div>

            <div class="card-body ">
                <div class="card3 mb-sm-5 mb-5 mb-md-0">
                    <div class="text">Observe your breath</div>
                </div>

                <div class="card4">
                    <div class="text">Anchor yourself</div>
                </div>
            </div>
        </div>
    </div>

    <div class="mental-health text-center mt-5">
        <h3>Your Mental Health is more than important your grades</h3>
        <div>
            <img src="./storages/mentalhealthtest.png" alt="" class="testImg">
        </div>
    </div>

    </div>


    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>