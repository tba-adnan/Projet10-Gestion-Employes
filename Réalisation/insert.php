<?php

    include 'config.php';
	include 'users.php';
	include 'userHandler.php';
//
    if(!empty($_POST)){
		$users = new users();	
		$userHandler = new UserAdd();
        $users->setFirstName($_POST['fname']);
        $users->setLastName($_POST['lname']);
        $users->setBdate($_POST['bdate']);
        $users->setDep($_POST['dep']);
		$users->setSalary($_POST['salary']);
		$users->setFunc($_POST['func']);
		$users->setPicture($_POST['picture']);
		$userHandler->insertusers($conn, $users);
        header("Location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputFName">Nom : </label>
				<input type="text" required="required" id="inputFName" name="fname" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Prénom : </label>
				<input type="text" required="required" id="inputLName" name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<div>
				<label for="bdate">Date de naissance : </label>
				<input type="date" required="required" class="form-control" id="bdate" name="bdate">
				<span></span>
			</div>
				<div class="form-group">
					<label for="inputGender">Département : </label>
					<input type="text" required="required" id="dep" name="dep" placeholder="département">
					</select>
					<span></span>
        		</div>

			<div>
				<label for="salary">Salaire : </label>
				<input type="number" required="required" class="form-control" id="salary" name="salary" placeholder="salaire">
				<span></span>
			</div>

			<div>
				<label for="fun">Fonction : </label>
				<input type="text" required="required" class="form-control" id="func" name="func" placeholder="function">
				<span></span>
			</div>

			<div>
				<label for="PICTURE">Photo : </label>
				<input type="text" required="required" class="form-control" id="picture" name="picture" placeholder="chemin">
				<span></span>
			</div>
			    <!--  -->
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>