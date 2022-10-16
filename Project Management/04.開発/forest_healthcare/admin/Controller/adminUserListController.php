<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_user
");

$sql->execute();

$userList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($userList);