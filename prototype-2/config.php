<?php
   $conn = mysqli_connect('localhost', 'superuser', 'superuser@123', 'db');

 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>