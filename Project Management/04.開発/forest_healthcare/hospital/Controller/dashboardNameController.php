<?php

session_start();
include "../Model/dbConnection.php";

$email = $_SESSION["hospital_email"];
$sql= $pdo->prepare("SELECT * FROM tbl_hospital WHERE email_address = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();
    $hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["hospitalInfo"]=$hospitalInfo;

?>








