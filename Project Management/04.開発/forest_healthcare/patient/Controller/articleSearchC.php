<?php

include "../Model/dbConnection.php";

if(isset($_POST["searchText"])){
    $search = $_POST["searchText"];

    // if($_POST["searchType"] == "name"){
        $sql = $pdo->prepare("SELECT * FROM tbl_healthknowledge 
        WHERE title LIKE :name
        AND description LIKE :description
        
        ");
        $sql->bindValue(":name", "%$search%");
        $sql->bindValue(":description", "%$search%");
    // }

    $sql->execute();

    $articleList = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($articleList);
  
}
