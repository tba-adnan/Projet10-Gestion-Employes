<?php
    class Users {
        private $id;
        private $firstName;
        private $lastName;
        private $bdate;
        private $dep;
        private $salary;
        private $func;
        private $picture;


        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }
        //
        public function getFirstName(){
            return $this->firstName;
        }
        public function setFirstName($value){
            $this->firstName = $value;
        }
        //
        public function getLastName(){
            return $this->lastName;
        }
        public function setLastName($value){
            $this->lastName = $value;
        }
        //
        public function getBdate(){
            return $this->bdate;
        }
        public function setBdate($value){
            $this->bdate= $value;
        }
        //
        public function getDep(){
            return $this->dep;
        }
        public function setDep($value){
            $this->dep= $value;
        }
        //
        public function getSalary(){
            return $this->salary;
        }
        public function setSalary($value){
            $this->salary= $value;
        }
        //
        public function getFunc(){
            return $this->func;
        }
        public function setFunc($value){
            $this->func= $value;
        }
        //
        public function getPicture(){
            return $this->picture;
        }
        public function setPicture($value){
            $this->picture= $value;
        }    
    }
?>