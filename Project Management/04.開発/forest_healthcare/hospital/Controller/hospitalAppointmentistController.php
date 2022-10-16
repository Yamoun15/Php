<?php

include "../Model/dbConnection.php";
// $sql = $pdo->prepare("
//         SELECT appointment.*,user.name AS username FROM tbl_appointment AS appointment
//         INNER JOIN tbl_user AS user
//         ON user.id = appointment.user_id 
    
// ");
$sql = $pdo->prepare("
        SELECT appointment.*,doc.*  FROM tbl_appointment AS appointment
        INNER JOIN tbl_doctor AS doc
        ON appointment.doctor_id = doc.id 
    
");

$sql->execute();

$appointmentList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($appointmentList);

?>