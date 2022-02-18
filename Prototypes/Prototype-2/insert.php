<?php

    include 'config.php';
    if(!empty($_POST)){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['email'];
        $person = array($firstName, $lastName, $age, $gender);
//query
        $sqlInsertQuery = "INSERT INTO users(fname, lname, age, email) 
                                VALUES('$firstName', '$lastName', '$age', '$email')";
        
        mysqli_query($conn, $sqlInsertQuery);
     
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
				<label for="inputFName">First Name : </label>
				<input type="text" required="required" id="inputFName" name="fname" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name : </label>
				<input type="text" required="required" id="inputLName" name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<div>
				<label for="inputAge">Age : </label>
				<input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
				<span></span>
			</div>
				<div class="form-group">
					<div>
				<label for="inputEmail">Email : </label>
				<input type="text" required="required" id="inputEmail" name="email" placeholder="Email">
				<span></span>
			</div>
					<span></span>
        		</div>
    
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>