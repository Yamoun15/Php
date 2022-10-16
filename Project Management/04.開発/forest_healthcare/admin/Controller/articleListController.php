<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("
        SELECT * FROM tbl_healthknowledge 
");

$sql->execute();

$articleList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo <pre>;
// print_r($articleList);