<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT appointment.*,user.name AS username,
        doc.name AS docname, doc.duty_day AS docday,doc.duty_start_time AS docstarttime,doc.duty_end_time AS docendtime
        , hos.name AS hosname
        FROM tbl_appointment AS appointment
        INNER JOIN tbl_user AS user
        ON appointment.user_id = user.id 
        INNER JOIN tbl_doctor AS doc
        ON  appointment.doctor_id =doc.id 
        INNER JOIN tbl_hospital AS hos
        ON appointment.hospital_id = hos.id 
        

    
");
$sql->execute();

$appointmentList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($appointmentList);

?>