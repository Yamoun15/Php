<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices
");

$sql->execute();
$diseaseInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

