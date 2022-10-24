<?php


include "../Model/dbConnection.php";

if (isset($_POST["changeBtn"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $photo = $_POST["photo"];

    // echo $title;
    // echo $text;

    $sql = $pdo->prepare(
        "INSERT INTO tbl_aboutus
        (
            title,
            description,
            photo,
            created_date
        )
        VALUES
        (
            :title,
            :description,
            :photo,
            :createdDate
        )"
    );

    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":photo",$photo);
    $sql->bindValue(":createdDate",date("Y/m/d"));

    $sql->execute();


}

