<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search 🔍</title>

</head>
<body>
</form>
</body>
</html>
<!--  -->
<div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
<!--  -->
<br>
<h2>Recherche d'employés : </h2>
<form action="" method="post">
<input class="form-control w-25" for="search" type="text" name="search" placeholder="Cherche par Nom.">
<br>
<input class="btn btn-success" fir="search"type="submit" name="submit" value="Search">
<a class="btn btn-secondary" href="index.php">Back</a>
<br>
<h2>Résultats : </h2>


<!--  -->





<?php
$search_value=$_POST["search"] ?? null;
$con=new mysqli('localhost','superadmin','superadmin@123','mainDB');
if($con->connect_error){
    echo 'Erro : Failed to connect.'.$con->connect_error;
    }else{
        //$sql="select * from EMPLOYE where fname OR lname OR id OR salary OR dep OR func OR bdate like '%$search_value%'";
        $sql="select * from EMPLOYE where fname OR fname like '%$search_value%'";
        $res=$con->query($sql);
        while($row=$res->fetch_assoc()){
            if ($con->query($sql)) {
                echo '<strong> Nom : </strong>',$row["fname"];
                echo '<br>';
                echo '<strong> Prénom : </strong> ',$row["lname"];
                echo '<br>';
                echo '<strong> Matricule : </strong> ', $row["id"];
                echo '<br>';
                echo '<strong> Salary : </strong> ', $row["salary"];
                echo '<br>';
                echo '<strong> Département : </strong> ', $row["dep"];
                echo '<br>'; 
            }

            }       

        }
?>