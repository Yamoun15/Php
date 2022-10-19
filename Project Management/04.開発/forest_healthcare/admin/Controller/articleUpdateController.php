<?php

include "../Model/dbConnection.php";
include "../Controller/articleEditController.php";

if (isset($_POST["updateArticle"])) {
    //get article info
    $title = $_POST["title"];
    $description = $_POST["description"];

    //get image Info
    if ($_FILES["photo"]["name"] == "") {
        // file not exist
        $sql = $pdo->prepare(
            "UPDATE tbl_healthknowledge SET 
            title = :title,
            description = :description,
            updated_date    = :updatedDate
            WHERE id = :id
        "
        );
    } else {
        $file = $_FILES['photo']['name'];
        $location = $_FILES['photo']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        $path = $title . "." . $extension;

        if (move_uploaded_file($location, "../View/image/" . $title . "." . $extension)) {
            $sql = $pdo->prepare(
                "UPDATE tbl_healthknowledge SET 
                    title = :title,
                    photo = :photo,
                    description = :description,
                    updated_date    = :updatedDate
                    WHERE id = :id
                "
            );
            $sql->bindValue(":photo", $path);
        } else {
            echo 'There was some error moving the file to upload directory.';
        }
    }
    $sql->bindValue(":title", $title);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":photo", ($articleDetail[0]['id'] + 1) . "." . $extension);
    $sql->bindValue(":id", $articleId);

    $sql->execute();

    header("Location: ../View/(admin HKNWL)articleList.php");
}
