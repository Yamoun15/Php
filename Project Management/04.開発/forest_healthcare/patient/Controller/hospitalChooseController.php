<?php

include "../Model/dbConnection.php";


if(isset($_POST["hospitalChoose"])){
    $choose = $_POST["hospitalChoose"];

        $sql = $pdo->prepare("SELECT * FROM doctor WHERE hospital_id=:hospitalID");
        $sql->bindValue(":hospitalID",$choose[0]['id'] );

    $sql->execute();

   
    $doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($doctorList);
  
}
