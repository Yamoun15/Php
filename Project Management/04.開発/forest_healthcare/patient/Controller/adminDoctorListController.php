<?php

include "../Model/dbConnection.php";

$rowLimit = 3;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;


$sql = $pdo->prepare("
        SELECT doc.*,dep.name As depname FROM tbl_doctor As doc 
        INNER JOIN tbl_department As dep
        ON doc.department_id = dep.id
        WHERE doc.del_flg = 0 LIMIT $startPage, $rowLimit
");

$sql->execute();

$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($doctorList);
$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM tbl_doctor WHERE del_flg = 0 ORDER BY created_date  
");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 


