<?php

include "../Model/dbConnection.php";

if(isset($_POST["submitBtn"])){
    $title = $_POST["title"];
    $phNo = $_POST["phNo"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $description = $_POST["description"];

    $sql = $pdo->prepare(
        "INSERT INTO tbl_contactus
        (
            phone_no,
            email_address,
            address,
            title,
            welcome_text,
            created_date
        )
        VALUE
        (
            :phNo,
            :email,
            :address,
            :title,
            :description,
            :createdDate
        )"
    );

    $sql->bindValue(":phNo",$phNo);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":address",$address);
    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
};

?>