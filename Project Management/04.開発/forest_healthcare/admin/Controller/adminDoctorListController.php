<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT doc.*,dep.name AS depname FROM tbl_doctor AS doc
        INNER JOIN tbl_department AS dep
        ON doc.department_id = dep.id
");

$sql->execute();

$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($doctorList);
//tbl_department AS dep == dep ka tbl_department
//tbl_doctor AS doc == doc ka tbl_doctor
//dep.name AS depname == dep table ka name column ko depname lot pay