<?php

session_start();

if (isset($_POST["email_address"]) && isset($_POST["password"])) {
    $username = $_POST["email_address"];
    $password = $_POST["password"];
    $_SESSION["email_address"] = $email;
}


if (!isset($_SESSION["email_address"])) {
    // go to login
    header("Location: ./login.php");
} else {
    $name = $_SESSION["email_address"];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poly&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<style>
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    color: black !important;
  }

  .homeText {
    font-family: 'Poly', serif;
    text-align: center;
    font-size: larger;
  }

  .mentalHealthArticle {
    display: flex;
    justify-content: space-around;
    background-image: radial-gradient(rgba(24, 128, 103, 1), rgba(100, 211, 165, 1), rgba(24, 128, 103, 1));
    text-decoration: none;
    padding: 3rem;
    flex-wrap: wrap;
  }

  .article {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 300px;
    margin: 2rem;
  }

  .article a {
    color: black;
  }

  .article .articleTitle {
    font-family: 'Poly', serif;
  }

  .article .description {
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
  }

  .text1 {
    transition: all 1s;
  }

  .text1:hover {
    transform: translateY(-5px) scale(1.1);
    color: #73777B;
  }

  .articleTitle {
    position: relative;
    transition: color 0.3s ease-in-out;
  }

  .articleTitle::before {
    content: "";
    position: absolute;
    top: 100%;
    width: 100%;
    height: 3px;
    background-color: #73777B;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out;
  }

  .articleTitle:hover {
    color: #73777B;
    transform: scale(1.1);
  }

  .articleTitle:hover::before {
    transform: scaleX(1);
  }

  .healthArticle {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .healthArticle .card {
    margin: 2rem;
  }
</style>

<body>
  <!-- Header Nav bar -->
  <?php include("./common/top.php"); ?>

  <!-- Body starts -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./storages/HomePageP1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./storages/HomePageP1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./storages/Rectangle 133.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="healthArticle">

    <div class="card mb-3 me-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-8 col-sm-8 col-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-4">
          <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
      </div>
    </div>

    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-8 col-sm-8 col-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-4">
          <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
      </div>
    </div>
  </div>

  <div class="homeText mt-5 mb-3">
    <div class="fw-bolder fs-2 text1">Mindfulmoments</div>
    <div>“The heart of meditation is taking ourselves a little
      less seriously.”</div>
  </div>

  <div class="mentalHealthArticle">
    <div class="article">
      <a class="articleImg" href=""><img src="./storages/Mental_Health1.png" alt=""></a>
      <a href="" class="articleTitle">ANXEITY</a>
      <a href="" class="description">“No need to hurry. No need to sparkle. No need to be anybody but oneself.”</a>
    </div>
    <div class="article" href="">
      <a class="articleImg"><img src="./storages/Mental_Health2.png" alt=""></a>
      <a href="" class="articleTitle">SElF-LOVE</a>
      <a href="" class="description">“Unconditional self love is all the really matters in life. It’s where real life
        begins.”</a>
    </div>
    <div class="article" href="">
      <a class="articleImg"><img src="./storages/Mental_Health3.png" alt=""></a>
      <a href="" class="articleTitle">HEALING</a>
      <a href="" class="description">“Healing requires from us to stop struggling, but to enjoy life more and endure it
        less.”</a>
    </div>
  </div>\
  <?php include("./common/footer.php"); ?>

</body>

</html>