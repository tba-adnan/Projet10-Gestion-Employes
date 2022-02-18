<?php
  include 'customers.php';
  $customerObj = new Employee();
  if(isset($_POST['submit'])) {
    $customerObj->insertData($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


  <div class="card-header bg-dark text-white">
    <h4>Insert Data</h4>
  </div>
  <div class="card-body bg-light">
    <form action="add.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
      </div>
      <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="text" class="form-control" name="salary" placeholder="Enter Salary" required="">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </div>

</body>

</html>