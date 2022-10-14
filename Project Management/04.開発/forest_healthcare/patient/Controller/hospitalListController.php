<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_hospital  
");

$sql->execute();

$hospitalList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($hospitalList);