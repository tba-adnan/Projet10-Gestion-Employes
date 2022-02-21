<?php
    include "config.php";
    include "userHandler.php";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $userHandler = new UserAdd();
            $userHandler->deleteusers($conn, $id); //::id::1-2
            header('Location: index.php');   
    }
?>