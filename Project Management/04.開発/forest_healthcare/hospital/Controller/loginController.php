<?php

session_start();

include "../Model/dbConnection.php";

if (isset($_POST["email_address"]) && isset($_POST["password"])) {
    $email = $_POST["email_address"];
    $pwd = $_POST["password"];

    $sql = $pdo->prepare("
    SELECT * FROM tbl_hospital
    WHERE email_address = :email AND 
    password = :pwd
");


    $sql->bindValue(":email", $email);
    $sql->bindValue(":pwd", $pwd);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($result);

    if (password_verify($pwd, $result[0]['password'])) {
        $_SESSION["email_address"] = $email;
        header("Location: ../View/hospital.php");
    } else {
        header("Location: ../View/hospitalLogin.php");
    }
}
