<?php
    class UserAdd {
        public function getAlluserss($conn){
            $sqlGetData = 'SELECT id, fname, lname, bdate, dep, salary, func, picture FROM EMPLOYE';
            $result = mysqli_query($conn ,$sqlGetData);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        }
        //add function.
        public function insertusers($conn, $users){
            $id = $users->getId();
            $firstName = $users->getFirstName();
            $lastName = $users->getLastName();
            $bdate = $users->getBdate();
            $dep = $users->getDep();
            $salary = $users->getSalary();
            $func = $users->getFunc();
            $picture = $users->getPicture();

        $InsertQuery = "INSERT INTO EMPLOYE(id, fname, lname, bdate, dep, salary, func, picture) VALUES('$id','$firstName','$lastName','$bdate','$dep','$salary', '$func', '$picture')";
        mysqli_query($conn, $InsertQuery);
        }
        public function deleteusers($conn, $id){
            $DeleteQuery = "DELETE FROM EMPLOYE WHERE id= '$id'";
            mysqli_query($conn, $DeleteQuery);
        }
//
        public function editusers($conn, $users, $id){
            $fname = $users->getFirstName();
            $lname = $users->getLastName();
            $bdate = $users->getBdate($_POST['bdate']);
            $dep = $users->getDep($_POST['dep']);
            $salary = $users->getSalary($_POST['salary']);
            $func = $users->getFunc($_POST['func']);
            $picture = $users->getPicture($_POST['picture']);
            $sqlUpdateQuery = "UPDATE EMPLOYE SET fname='$fname', lname='$lname', bdate='$bdate', dep='$dep', salary='$salary', func='$func', picture='$picture' WHERE id=$id";
            mysqli_query($conn, $sqlUpdateQuery);
        }
        public function getusers($conn, $id){$GetQuery = "SELECT * FROM EMPLOYE WHERE id= $id";
        $result = mysqli_query($conn, $GetQuery);
        $users = mysqli_fetch_assoc($result);
        return $users;
        }
    }
?>