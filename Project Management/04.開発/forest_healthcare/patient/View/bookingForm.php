<?php

session_start();

$patientInfo = $_SESSION["patientInfo"];
print_r($patientInfo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <style>
        body {
            height: 100vh;
            background-image: url('./storages/doctor_kw5l.png');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: scroll;
            background-attachment: fixed;
        }

        .modal-content {}

        .btnBook {
            background-color: #43A391;
            max-width: 200px;
            transition: all 1s;
        }
        .btnBook:hover{
            background-color: #43A391;
            max-width: 200px;
            transform: scale(1.1);
        }

        .btnCancel {
            max-width: 200px;
        }

        .modal-header,
        .date,
        .time,
        .place,
        .booking-summary,
        .modal-dialog {
            color: #188067;
        }
    </style>
</head>

<body>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@mdo">Book</button> -->


    <!-- <div class="modal fade modal-dialog .modal-dialog-scrollable modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true"> -->
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content ">
            <div class="modal-header mt-3 mb-3 mt-md-3 mb-md-3 mt-sm-3 mb-sm-3">
                <h1 class="modal-title mx-auto " id="exampleModalLabel">Appointment Request</h1>

            </div>
            <h6 class="modal-dialog ms-5">Please fill in our online form and we will contact you within 2 working
                days, with the nearest available appointment slot.
            </h6>


            <div class="modal-body">
                <form action="../Controller/addBookingController.php">
                    <div class="row ms-3 me-3">
                        <div class="col-7 ms-5 col-sm-12 col-md-6">
                            <div class="row ">
                                <div class="col-md-6 mb-3 col-sm-12">
                                    <label for="recipient-name" class="col-form-label"></label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="name" value="<?= $patientInfo[0]["name"] ?>" required name="" readonly>
                                </div>
                                <div class="col-md-6 mb-3 col-sm-12">
                                    <label for="message-text" class="col-form-label"></label>
                                    <input class="form-control" id="message-text" placeholder="Phone" value="<?= $patientInfo[0]["phone_no"] ?>" required></input>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-6 mb-3 col-sm-12">
                                    <label for="message-text" class="col-form-label"></label>
                                    <input class="form-control" id="message-text" placeholder="Age(Year)"></input>
                                </div>
                                <div class="col-md-6 mb-3 col-sm-12">
                                    <label for="message-text" class="col-form-label"></label>
                                    <input class="form-control" id="message-text" placeholder="Age(Month)"></input>
                                </div> -->
                                <span class="form-check form-check-inline">
                                    <label for="birthday">Date Of Birth:</label>
                                    <input type="date" id="birthday" name="birthday" class="col-md-12 mb-3 col-sm-12 col-12 " value="<?= $patientInfo[0]["date_of_birth"] ?>"></span>
                            </div>

                            <span>Select Gender</span>
                            <span class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </span>
                            <span class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </span>
                            <span class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Other
                                </label>
                            </span>

                            <div class="row mt-3 mt-sm-3 mt-md-3 ">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Brief description of your symptoms" id="floatingTextarea" required value="<?= $patientInfo[0]["address"] ?>"></textarea>
                                    <label for="floatingTextarea">Address
                                    </label>
                                </div>
                            </div>

                            <div class="row mt-3 mt-sm-3 mt-md-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Brief description of your symptoms" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Brief description of your symptoms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-sm-12 col-md-4 mt-4 ms-sm-5">
                            <div class="card text-center p-2" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title booking-summary">Booking Summary</h5>
                                    <img src="doctor3.png" alt="" width="100px">
                                    <p class="card-text"><b>Prof. Aung Kyaw Kyaw</b></p>
                                    <p class="card-text"><b>Cardiologist</b></p>
                                    <div class="text-start">
                                        <div class="date"><b>Date </b>- 29 Sep, 2022</div>
                                        <div class="time"><b>Time</b> - 7:00 AM - 9:00 AM</div>
                                        <div class="place"><b>Place</b> - Pan Hlaing Hospital</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" form-check m-3 ms-3 ms-sm-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and accept <a href="#"><u>the terms and conditions.</u></a>
                            </label>
                        </div>
                        <a class="btn btnBook ms-5 text-white" href="#" role="button" type="submit">Book Now</a>
                        <a class="btn btn-danger btnCancel  ms-5 text-white" href="#" role="button" type="submit">Cancel</a>
                </form>
            </div>


        </div>
    </div>

    </div>
    </div>
    </div>


</body>

</html>