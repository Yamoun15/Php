<?php

session_start();

include "../Model/dbConnection.php";
$email = $_SESSION["email_address"];
$sql = $pdo->prepare("SELECT * FROM tbl_user WHERE email_address = :email");
$sql->bindValue(":email", $email);
$sql->execute();

$patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["patientInfo"] = $patientInfo;
print_r($patientInfo);
header("Location: ../View/bookingForm.php");

?>