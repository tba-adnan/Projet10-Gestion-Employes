<?php
    require_once 'classes/Todo.php';
    require 'classes/TodoManager.php';
    $item;
    $id;
    $todoManager = new TodoManager("data.json");

    if(isset($_GET['id'])){
        $item = $todoManager->getItem($_GET['id']);
        $id = $item['id'];

    }


    if(isset($_POST['title'], $_POST['description'])){
        $updateItem = new Todo();
        $updateItem->id = $id;
        $updateItem->title = htmlspecialchars($_POST['title']);
        $updateItem->description = htmlspecialchars($_POST['description']);     

        $todoManager->updateItem($updateItem);

        header("Location:index.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDO List</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <p>Edit task</p>
            <input type="text" name="title" placeholder="Enter Title" value=<?=$item['title']?>>
            <input type="text" name="description" placeholder="Enter description" value=<?=$item['description']?>>
            <input type="submit" value="Edit" name="submitButton" href='index.php'>
        </form>
    </div>
</body>
</html>
