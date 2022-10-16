<?php

include "../Model/dbConnection.php";

if (isset($_POST["updateArticle"])) {
    //get article info
    $name = $_POST["title"];
    $description = $_POST["description"];

    $file = $_FILES['photo']['name'];
    $location = $_FILES['photo']['tmp_name'];
    $extension = pathinfo($file)['extension'];
    $path = $name . "." . $extension;

    move_uploaded_file($location, "../View/image/" . $name . "." . $extension);
        $sql = $pdo->prepare(
            "UPDATE tbl_healthknowledge SET 
                    title = :name,
                    photo = :photo,
                    description = :description
                    WHERE id = :id
                "
        );
        $sql->bindValue(":photo", $path);
    
    $sql->bindValue(":name", $name);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":id", $id);

    $sql->execute();

    header("Location: ../View/(admin HKNWL)articleList.php");
}
