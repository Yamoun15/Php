<?php

include "../Model/dbConnection.php";

if (isset($_POST["changeBtn"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $photo = $_POST["photo"];

    // echo $title;
    // echo $text;

    $sql = $pdo->prepare("UPDATE tbl_aboutus SET title=:title,
                                description=:description,
                                photo=:photo,
                                created_date=:createdDate");

    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":photo",$photo);
    $sql->bindValue(":createdDate",date("Y/m/d"));

    $sql->execute();


}

