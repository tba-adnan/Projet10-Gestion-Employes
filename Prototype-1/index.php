<?php
    require_once 'classes/Todo.php';
    require 'classes/TodoManager.php';
    $newItem = new Todo();
    $todoManager = new TodoManager("data.json");

    if(isset($_POST['title'], $_POST['description'])){
        $newItem->id = uniqid();    
        $newItem->title = htmlspecialchars($_POST['title']);
        $newItem->description = htmlspecialchars($_POST['description']);
        $todoManager->insertItem($newItem);
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
        <form action="index.php" method="post">
            <p>Add a new task</p>
            <input type="text" name="title" placeholder="Enter Title">
            <input type="text" name="description" placeholder="Enter description">
            <input type="submit" value="Add" name="submitButton" >
        </form>
        <div>
            <?php
                $todoManager->getAllItems();
            ?>
        </div>

    </div>
</body>
</html>


