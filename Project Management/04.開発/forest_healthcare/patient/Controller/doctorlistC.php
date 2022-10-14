<?php
session_start();

include "../Model/dbConnection.php";

if(isset($_GET['doctorID'])){
    $doctorID = $_GET['doctorID'];

    $sql= $pdo->prepare("SELECT * FROM tbl_doctor WHERE id = :doctorID");
    $sql->bindValue(":doctorID",$doctorID);
    $sql->execute();
    $doctorInfos = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["doctorInfos"] = $doctorInfos;
    header("Location: ../View/bookingForm.php");
}

?>