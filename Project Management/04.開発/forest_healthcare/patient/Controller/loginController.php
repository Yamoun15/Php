<?php

session_start();

include "../Model/dbConnection.php";

if (isset($_POST["email_address"]) && isset($_POST["password"])) {
    $email = $_POST["email_address"];
    $pwd = $_POST["password"];

    $sql = $pdo->prepare("
    SELECT * FROM tbl_user
    WHERE email_address = :email 
");

    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($result);

    if (password_verify($pwd, $result[0]['password'])) {
        $_SESSION["email_address"] = $email;
        $_SESSION["id"] = $result[0]['id'];
        header("Location: ../View/userHomePage.php");
    } else {
        header("Location: ../View/userLogin.php");
    }
}
