<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Lists</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/root.css" />
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>

  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./resources/css/doctorList.css">
</head>

<body>
  <?php include('./common/top.php'); ?>

  <div class="container-fluid">
    <!-- <img src="undraw_medicine_b-1-ol.svg" alt="" class="bgImg"> -->
    <!-- <ul class="nav d-flex align-content-center justify-content-end"
      style="background-color: #43A391 ; height: 80px; width: 100%; ">
      <li class="nav-item">
        <a class="nav-link active text-white text-decoration-underline" aria-current="page" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white ">|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-decoration-underline" href="#">Log In/Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white ">|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-decoration-underline" href="#"> Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white ">|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-decoration-underline" href="#"> Contact Us</a>
      </li>
      <li class="nav-item">
        <a href="#"><i class="fa-regular fa-user p-1"
            style="border: 3px solid white; border-radius: 50px; color: white;"></i></a>
      </li>
    </ul>

    <ul class="nav d-flex justify-content-around  align-content-center color-white fs-5"
      style="background-color: #64D3A5 ; height: 105px; width: 100%">
      <li class="nav-item" style="width: 100px; height: 100px;">
        <a class="nav-link " aria-current="page"><img src="./storages/Forest logo.png" alt=""></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link  text-white text-decoration-underline mt-4" aria-current="page" href="#">Doctors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white text-decoration-underline mt-4" href="#">Conditons & Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white text-decoration-underline mt-4" href="#">Health Knowledge</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white text-decoration-underline mt-4" href="#">Mental Health</a>
      </li>
    </ul> -->

    <div class="body-content position-relative  ">
      <div class="p1 fs-5 fw-bold ">Let’s get started for booking.</div>
      <div class="p1 fs-5 fw-bold  ">You can find doctors and hospital here.</div>
      <div class="dropdown">
        <a class="btn dropdown-toggle" href="#" style="color: #188067" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Choose Hospital
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Pan Hlaing</a></li>
          <li><a class="dropdown-item" href="#">Royal Asia</a></li>
          <li><a class="dropdown-item" href="#">Thuka Gabar</a></li>
        </ul>
      </div>

      <div class="hospitalCards">
        <!-- Hospital Logo -->
        <div class="hospitalLogo position-relative start-0 ms-5">
          <img src="./storages/pun hlaing logo 1.png" alt="">
        </div>

        <!-- Department -->
        <div class="department m-3 " style="background-color: #F9C56B; border-radius: 30px; max-width: 500px; ">

          <img src="./storages/department item.png" alt="" >
          <span class="fs-5 fw-bold ms-5">Cardiology Department</span>
        </div>

        <!-- cards -->
        <div class="card m-3  d-flex justify-content-evenly p-2" style="max-width: 1000px; border-radius: 25px;">
          <div class="row g-3 ">
            <div class="col-md-2">
              <img src="./storages/doctor1.png" width="100px" class="img-fluid rounded-start " alt="...">
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body " style="color: #188067">

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                
              </div>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                <img src="booking.png" alt="">
                Book</a>
            </div>
          </div>
        </div>

        <div class="card m-3  d-flex justify-content-evenly p-2" style="max-width: 1000px; border-radius: 25px;">
          <div class="row g-3 ">
            <div class="col-md-2">
              <img src="./storages/doctor1.png" width="100px" class="img-fluid rounded-start " alt="...">
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body " style="color: #188067">

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                
              </div>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                <img src="./storages/booking.png" alt="">
                Book</a>
            </div>
          </div>
        </div>

        <div class="card m-3  d-flex justify-content-evenly p-2" style="max-width: 1000px; border-radius: 25px;">
          <div class="row g-3 ">
            <div class="col-md-2">
              <img src="./storages/doctor1.png" width="100px" class="img-fluid rounded-start " alt="...">
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body " style="color: #188067">

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                
              </div>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                <img src="./storages/booking.png" alt="">
                Book</a>
            </div>
          </div>
        </div>

    <!-- footer nav bar -->
    <!-- <div class="footer d-flex" style="height: 215px; background: #43A391">
      <img src="./storages/Forest logo.png" class="m-s" style="width: 100px; height: 100px;" alt="">
      <div style="width: 500px; height: 200px;">To be a trusted health care provider that provides reliable health
        information to make healthier and happier decisions. </div> -->
    </div>
  </div>

  <?php include('./common/footer.php'); ?>
</body>

</html>