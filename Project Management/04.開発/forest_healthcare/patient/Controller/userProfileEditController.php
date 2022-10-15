<?php

session_start();

include "../Model/dbConnection.php";


// $email = $_SESSION["email_address"];
$id = $_SESSION["id"];
// echo "id is " . $id;
$sql = $pdo->prepare("
SELECT * FROM tbl_user 
WHERE id = :id
");
$sql->bindValue(":id", $id);
$sql->execute();

$patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["patientInfo"] = $patientInfo ;

header("Location: ../View/userProfile.php");

?>