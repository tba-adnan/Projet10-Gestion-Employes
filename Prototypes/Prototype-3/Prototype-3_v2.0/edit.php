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
        $users->setEmail($_POST['email']);
        $users->setAge($_POST['age']);
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
				<h3>add User : </h3>
				<form method="POST" action="">
					<div>
						<label for="inputFName">First Name</label>
						<input type="text" required="required" id="inputFName" value=<?php echo $users['fname']?>
							name="fname" placeholder="First Name">
						<span></span>
					</div>

					<div>
						<label for="inputLName">Last Name</label>
						<input type="text" required="required" id="inputLName" value=<?php echo $users['lname']?>
							name="lname" placeholder="Last Name">
						<span></span>
					</div>

					<div>
						<label for="inputAge">Age</label>
						<input type="number" required="required" class="form-control" id="inputAge"
							value=<?php echo $users['age']?> name="age" placeholder="Age">
						<span></span>
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="text" required="required" id="inputEmail" value=<?php echo $users['email']?>
							name="email" placeholder="Email">
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