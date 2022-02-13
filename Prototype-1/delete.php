<?php
    require 'classes/TodoManager.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $todomanager = new TodoManager();
        $todomanager->deleteItem($id);

        header('Location: index.php');
    }
?>