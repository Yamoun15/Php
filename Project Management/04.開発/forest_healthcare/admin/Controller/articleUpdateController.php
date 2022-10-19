<?php

include "../Model/dbConnection.php";
include "../Controller/articleEditController.php";

if (isset($_POST["updateArticle"])) {
    //get article info
    $title = $_POST["title"];
    $description = $_POST["description"];

    $file = $_FILES['photo']['name'];
    $location = $_FILES['photo']['tmp_name'];
    $extension = pathinfo($file)['extension'];

    if (move_uploaded_file($location, "../View/image/" . ($articleInfo[0]['id'] + 1) . "." . $extension)) {
        $sql = $pdo->prepare(
            "UPDATE tbl_healthknowledge SET 
                    title = :title,
                    photo = :photo,
                    description = :description
                    WHERE id = :id
                "
        );


        $sql->bindValue(":title", $title);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":photo", ($articleDetail[0]['id'] + 1) . "." . $extension);
        $sql->bindValue(":id", $articleId);

        $sql->execute();

        header("Location: ../View/(admin HKNWL)articleList.php");
    }
}
