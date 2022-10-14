<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_doctor 
");

$sql->execute();

$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);