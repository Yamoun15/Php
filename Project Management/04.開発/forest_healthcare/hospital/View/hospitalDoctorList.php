<?php
include "../Controller/hospitalDoctorListController.php";
// include "../Controller/dashboardNameController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Doctor List</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/hospitalDoctorList.css?v=" <?= time() ?>>
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
            <span class="content-header-text1">Doctor</span>
            <p class="content-header-text2"><small>Doctor List</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Doctor</li>
        </ol>
    </section>
    <!-- Header -->


    <div class="container">
        <div class="row">
            <div class=" col-sm-1 col-2"></div>
            <div class="col-md-9 col-sm-9 mx-auto table-responsive">

                <table class="table">
                    <thead class="doctorTable">
                        <tr class="title">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Expert In</th>
                            <th scope="col">Day</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ph No</th>
                            <th scope="col">Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($doctorList as $key => $doctor) { ?>
                            <tr>
                                <td scope="row"><?= $count++; ?>.</td>
                                <td><?= $doctor["name"] ?></td>
                                <td><?= $doctor["depname"] ?></td>
                                <td><?= $doctor["dr_expert_in"] ?></td>
                                <td><?= $doctor["duty_day"] ?>(<?= $doctor["duty_start_time"] ?>~<?= $doctor["duty_end_time"] ?>)</td>
                                
                                <td><?= $doctor["email_address"] ?></td>
                                <td><?= $doctor["phone_no"] ?></td>
                                <td>
                                    <button class="btn"><a href="../Controller/editDoctorController.php?id=<?= $doctor["id"]?>"><i class="fa-solid fa-pen-to-square hospitalScheduleEditIcon"></a></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash-can hospitalScheduleDeleteIcon"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <!-- <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dr.John</td>
                            <td>Neurology</td>
                            <td>Neurologist</td>
                            <td>SUNDAY</td>
                            <td>10AM</td>
                            <td>12PM</td>
                            <td>johnwick@gmail.com</td>
                            <td>09-1234567</td>
                            <td>nNo(11),(9) Street..</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square hospitalScheduleEditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can hospitalScheduleDeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dr.John</td>
                            <td>Neurology</td>
                            <td>Neurologist</td>
                            <td>SUNDAY</td>
                            <td>10AM</td>
                            <td>12PM</td>
                            <td>johnwick@gmail.com</td>
                            <td>09-1234567</td>
                            <td>nNo(11),(9) Street..</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square hospitalScheduleEditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can hospitalScheduleDeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dr.John</td>
                            <td>Neurology</td>
                            <td>Neurologist</td>
                            <td>SUNDAY</td>
                            <td>10AM</td>
                            <td>12PM</td>
                            <td>johnwick@gmail.com</td>
                            <td>09-1234567</td>
                            <td>nNo(11),(9) Street..</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square hospitalScheduleEditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can hospitalScheduleDeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dr.John</td>
                            <td>Neurology</td>
                            <td>Neurologist</td>
                            <td>SUNDAY</td>
                            <td>10AM</td>
                            <td>12PM</td>
                            <td>johnwick@gmail.com</td>
                            <td>09-1234567</td>
                            <td>nNo(11),(9) Street..</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square hospitalScheduleEditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can hospitalScheduleDeleteIcon"></i></button>
                            </td>
                        </tr>
                    </tbody> -->
                </table>

            </div>

        </div>

        <div class="row">
            <div class="col-md-8 col-sm-5"></div>
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
        <div class="col-md-1 col-sm-1 col-2"></div>



        <!-- Footer -->
        <?php include("common/footer.php"); ?>

        <script src="./resources/js/adminAboutUs.js"></script>

</body>

</html>