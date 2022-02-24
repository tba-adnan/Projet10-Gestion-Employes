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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
<!-- NAV BAR -->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<!-- NAV BAR -->
	<div>
		<div>
			<div>
				<h3>Edit User : </h3>
				<form method="POST" action="">
					<div>
						<label for="inputFName">Nom : </label>
						<input type="text" class="form-control w-25" class="form-control" required="required" id="inputFName" value=<?php echo $users['fname']?>
							name="fname" placeholder="First Name">
						<span></span>
					</div>

					<div>
						<label for="inputLName">Prénom : </label>
						<input type="text" class="form-control w-25"class="form-control" required="required" id="inputLName" value=<?php echo $users['lname']?>
							name="lname" placeholder="Last Name">
						<span></span>
					</div>

					<div>
						<label for="bdate">Date de naissance : </label>
						<input type="date" required="required" class="form-control w-25" class="form-control" id="bdate"
							value=<?php echo $users['bdate']?> name="bdate">
						<span></span>
					</div>
					<div class="form-group">
						<label for="dep">Département : </label>
						<input type="text" class="form-control w-25" class="form-control" required="required" id="dep" value=<?php echo $users['dep']?>
							name="dep" placeholder="départment">
						<span></span>
					</div>

					<div class="form-group">
						<label for="salary">Slaire : </label>
						<input type="number" class="form-control w-25" class="form-control" required="required" id="salary" value=<?php echo $users['salary']?>
							name="salary" placeholder="salaire">
						<span></span>
					</div>

					<div class="form-group">
						<label for="func">Fonction : </label>
						<input type="text"  class="form-control w-25"class="form-control" required="required" id="func" value=<?php echo $users['func']?>
							name="func" placeholder="fonction">
						<span></span>
					</div>

					<div class="form-group">
						<label for="picture">Picture : </label>
						<input type="text" class="form-control w-25" class="form-control" required="required" id="picture" value=<?php echo $users['picture']?>
							name="picture" placeholder="chemin">
						<span></span>
					</div>
<br>
					<div class="form-actions">
						<input name="update" class="btn btn-success" type="submit" value="Update">
						<a class="btn btn-secondary" href="index.php">Back</a>
						<br> 
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>