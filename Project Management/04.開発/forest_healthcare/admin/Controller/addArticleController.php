<?php

include "../Model/dbConnection.php";
session_start();

if (isset($_POST["addArticle"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];

    if ($_FILES["uploadFile"]["name"] == "") {
        // file not exist
        $sql = $pdo->prepare("
            INSERT INTO tbl_healthknowledge
            (
                title,
                description,
                created_date
            )
            VALUES
            (
                :title,
                :description,
                :created_date
            )
        "
        );
    } else {
    $file = $_FILES['uploadFile']['name'];
    $location = $_FILES['uploadFile']['tmp_name'];
    $extension = pathinfo($file)['extension'];

    $sql = $pdo->prepare("SELECT id FROM tbl_healthknowledge ORDER BY id DESC LIMIT 1");
    $sql->execute();
    $articleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (move_uploaded_file($location, "../View/image/articles/". ($articleInfo[0]['id']+1).".".$extension)) {
        $sql = $pdo->prepare("
        INSERT INTO tbl_healthknowledge
        (
            title,
            photo,
            description,
            created_date
        )
        VALUES
        (
            :title,
            :photo,
            :description,
            :created_date
        )
    ");
    $sql->bindValue(":photo", $path);
} else {
    echo 'There was some error moving the file to upload directory.';
}
    $sql->bindValue(":title", $title);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":photo", ($articleInfo[0]['id']+1).".".$extension);
    $sql->bindValue(":created_date", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/(admin HKNWL)articleList.php");
    } 







//     if ($_FILES["uploadFile"]["name"] == "") {
//         $sql = $pdo->prepare(
//             " INSERT INTO tbl_healthknowledge
//             (
//             title,
//             photo,
//             description,
//             created_date
//             )
//             VALUES
//             (
//             :title,
//             :photo,
//             :description,
//             :created_date
//             )
//         "
//         );
//     } else {
//         $file = $_FILES['uploadFile']['name'];
//         $location = $_FILES['uploadFile']['tmp_name'];
//         $extension = pathinfo($file)['extension'];
//         $path = $title . "." . $extension;

//         if (move_uploaded_file($location, "../View/image/" . $file . "." . $extension)) {
//             $sql = $pdo->prepare(
//                 "INSERT INTO tbl_healthknowledge 
//             title,
//             photo,
//             description,
//             created_date
//             )
//             VALUES
//             (
//             :title,
//             :photo,
//             :description,
//             :created_date
//             )
// "
//             );
//             $sql->bindValue(":photo", $path);
//         } else {
//             echo 'There was some error moving the file to upload directory.';
//         }
//     };
//     $sql->bindValue(":title", $title);
//     $sql->bindValue(":description", $description);
//     $sql->bindValue(":created_date", date("Y/m/d"));
//     $sql->execute();

//     $sql = $pdo->prepare("
//     SELECT id FROM tbl_healthknowledge
//     ");
//     $sql->execute();
//     $id = $sql->fetchAll(PDO::FETCH_ASSOC);
//     $_SESSION["id"] = $id;

//     header("Location: ../View/(admin HKNWL)articleList.php");
} else {
    echo "Error";
}
