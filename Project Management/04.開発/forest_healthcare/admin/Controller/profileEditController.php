<?php

session_start();

include "../Model/dbConnection.php";

$id= $_SESSION["id"];
$sql = $pdo->prepare("SELECT * FROM tbl_admin WHERE id = :id");

$sql->bindValue(":id", $id);
$sql->execute();

$adminInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["adminInfo"] = $adminInfo;
// echo $id;
// print_r($_SESSION["adminInfo"]);

header("Location: ../View/adminProfileUpdate.php");

?>