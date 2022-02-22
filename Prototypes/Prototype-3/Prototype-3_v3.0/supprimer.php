<?php
    include "GestionEmployes.php";

if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
    $gestionEmployes = new GestionEmployes();
    $id = $_GET['id'] ;
    $gestionEmployes->Supprimer($id);
        
    header('Location: index.php');
}
?>