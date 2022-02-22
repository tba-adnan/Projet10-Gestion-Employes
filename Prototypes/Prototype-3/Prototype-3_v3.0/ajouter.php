<?php

include "GestionEmployes.php";
// Trouver tous les employés depuis la base de données 
$gestionEmployes = new GestionEmployes();
$employes = $gestionEmployes->RechercherTous();

if(!empty($_POST)){
	$employe = new Employe();
	$employe->setNom($_POST['Nom']);
	$employe->setPrenom($_POST['Prenom']);
	$employe->setDateNaissance($_POST['DateNaissance']);
	$gestionEmployes->Ajouter($employe);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Gestion des employés</title>
	
</head>
<body>

<h1>Ajouter un employé</h1>

<form method="post" action="">
	<div>
		<label for="Nom">Nom</label>
		<input type="text" required="required" id="Nom" name="Nom" 
		placeholder="Nom">
	</div>
	<div>
		<label for="Prenom">Prénom</label>
		<input type="text" required="required" id="Prenom" name="Prenom" 
		placeholder="Prénom">
	</div>
	<div>
		<label for="DateNaissance">Date de naissance</label>
		<input type="date" required="required" id="DateNaissance" 
		name="DateNaissance" placeholder="Date de naissance">
	</div>
	<div>
		<button type="submit">Ajouter</button>
		<a href="index.php">Annuler</a>
	</div>
</form>
</body>
</html>