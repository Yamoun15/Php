<?php
session_start();

include "../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $userId = $_GET["id"];

    $sql = $pdo->prepare("
    SELECT user.*,appointment.description AS appdes FROM tbl_user  AS user
    INNER JOIN tbl_appointment AS appointment
    ON user.id = appointment.user_id
    WHERE user.id = :id
");
    $sql->bindValue(":id", $userId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    //save the result to session
    $_SESSION["userInfo"] = $result;

    header("Location: ../View/hospitalpatientDetail.php");
}