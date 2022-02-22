<?php
    include "GestionEmployes.php";

if(isset($_GET['id'])){

    $gestionEmployes = new GestionEmployes();
    $id = $_GET['id'] ;
    $gestionEmployes->Supprimer($id);
        
    header('Location: index.php');
}
?>