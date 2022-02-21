<?php
    include 'config.php';
    include 'users.php';
    include 'userHandler.php';
//
    $userHandler = new UserAdd();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $users = $userHandler->getusers($conn, $id);
    }
    if(isset($_POST['update'])){
        $users = new users();
        $users->setFirstName($_POST['fname']);
        $users->setLastName($_POST['lname']);
        $users->setBdate($_POST['bdate']);
        $users->setDep($_POST['dep']);
		$users->setSalary($_POST['salary']);
		$users->setFunc($_POST['func']);
		$users->setPicture($_POST['picture']);
		$userHandler->insertusers($conn, $users);
        $userHandler->editusers($conn, $users, $id);
        header('Location: index.php');  
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div>
		<div>
			<div>
				<h3>Edit User : </h3>
				<form method="POST" action="">
					<div>
						<label for="inputFName">Nom : </label>
						<input type="text" required="required" id="inputFName" value=<?php echo $users['fname']?>
							name="fname" placeholder="First Name">
						<span></span>
					</div>

					<div>
						<label for="inputLName">Prénom : </label>
						<input type="text" required="required" id="inputLName" value=<?php echo $users['lname']?>
							name="lname" placeholder="Last Name">
						<span></span>
					</div>

					<div>
						<label for="bdate">Date de naissance : </label>
						<input type="date" required="required" class="form-control" id="bdate"
							value=<?php echo $users['bdate']?> name="bdate">
						<span></span>
					</div>
					<div class="form-group">
						<label for="dep">Département : </label>
						<input type="text" required="required" id="dep" value=<?php echo $users['dep']?>
							name="dep" placeholder="départment">
						<span></span>
					</div>

					<div class="form-group">
						<label for="salary">Slaire : </label>
						<input type="number" required="required" id="salary" value=<?php echo $users['salary']?>
							name="salary" placeholder="salaire">
						<span></span>
					</div>

					<div class="form-group">
						<label for="func">Fonction : </label>
						<input type="text" required="required" id="func" value=<?php echo $users['func']?>
							name="func" placeholder="fonction">
						<span></span>
					</div>

					<div class="form-group">
						<label for="picture">Picture : </label>
						<input type="text" required="required" id="picture" value=<?php echo $users['picture']?>
							name="picture" placeholder="chemin">
						<span></span>
					</div>


					<div class="form-actions">
						<input name="update" type="submit" value="Update">
						<a href="index.php">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>