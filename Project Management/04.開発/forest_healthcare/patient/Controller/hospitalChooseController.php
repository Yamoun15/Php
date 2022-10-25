<?php

include "../Model/dbConnection.php";


if(isset($_POST["hospital"])){
    $choose = $_POST["hospital"];

    $sql = $pdo->prepare("SELECT * FROM tbl_doctor WHERE hospital_id = :id");
    $sql->bindValue(":id",$choose);
    $sql->execute();
    $doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($doctorList);
}
?>
