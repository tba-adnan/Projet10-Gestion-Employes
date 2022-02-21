<?php
    class UserAdd {
        public function getAlluserss($conn){
            $sqlGetData = 'SELECT id, fname, lname, age, email FROM users';
            $result = mysqli_query($conn ,$sqlGetData);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        }
        public function insertusers($conn, $users){
            $firstName = $users->getFirstName();
            $lastName = $users->getLastName();
            $age = $users->getAge();
            $email = $users->getEmail();
        $sqlInsertQuery = "INSERT INTO users(fname, lname, age, email) VALUES('$firstName','$lastName','$age','$email')";
        mysqli_query($conn, $sqlInsertQuery);
        }
        public function deleteusers($conn, $id){
            $sqlDeleteQuery = "DELETE FROM users WHERE id= '$id'";
            mysqli_query($conn, $sqlDeleteQuery);
        }
        public function editusers($conn, $users, $id){
            $first_name = $users->getFirstName();
            $last_name = $users->getLastName();
            $email = $users->getEmail();
            $age = $users->getAge();
            $sqlUpdateQuery = "UPDATE users SET fname='$first_name', lname='$last_name', age='$age', email='$email'WHERE id=$id";
             mysqli_query($conn, $sqlUpdateQuery);
        }
        public function getusers($conn, $id){$sqlGetQuery = "SELECT * FROM users WHERE id= $id";
        $result = mysqli_query($conn, $sqlGetQuery);
        $users = mysqli_fetch_assoc($result);
        return $users;
        }
    }
?>