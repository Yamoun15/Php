<?php
include "../Controller/adminAppointmentListController.php";
include "../Controller/dashboardNameController.php";
// echo "<pre>";
// print_r($appointmentList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Appointment List</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/adminContact.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./resources/css/adminTableStyle.css">
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-1 col-sm-1 col-2"></div>
            <div class="col-md-10 col-sm-10 mx-auto table-responsive">
                <table class="table">
                    <thead class="doctorTable">
                        <tr class="title">
                            <th scope="col">No</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Hospital Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Date&Time</th>
                            <th scope="col">Patient Detail</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($appointmentList as $key => $appointment) { ?>
                            <tr>
                                <td scope="row"><?= $count++; ?>.</td>
                                <td><?= $appointment["username"] ?></td>
                                <td><?= $appointment["hosname"] ?></td>
                                <td><?= $appointment["docname"] ?></td>
                                <td><?= $appointment["docday"] ?><?= "(" ?><?= $appointment["docstarttime"] ?><?= "~" ?><?= $appointment["docendtime"] ?><?= ")" ?></td>
                                <td><button class="btnview"><a href="../Controller/adminPatientDetailController.php?id=<?= $appointment["userid"]?>">view</a></button></td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        <?php
                                        if ($appointment["status"] == 0) {
                                            echo "Pending";
                                        } else  if ($appointment["status"] == 1) {
                                            echo "Approved";
                                        } else  if ($appointment["status"] == 2) {
                                            echo "Reject";
                                        }
                                        ?>
                                    </button>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>patient name</td>
                                <td><?= $appointment["docname"] ?></td>
                                <td>9AM-11AM(SUN)</td>
                                <td><button class="btnview">view</button></td>
                                <td>Pending</td>
                            </tr> -->
                        <?php } ?>
                        <!-- <tr>
                            <td>U Nana</td>
                            <td>Dr John</td>
                            <td>9AM-11AM(SUN)</td>
                            <td><button class="btnview">view</button></td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>U Nana</td>
                            <td>Dr John</td>
                            <td>9AM-11AM(SUN)</td>
                            <td><button class="btnview">view</button></td>
                            <td>Pending</td>
                        </tr> -->
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
</body>

</html>