<?php
    include "../GestionEmployes.php";
    $Employee = new Employee;
    $employee->setNom('adnane');
    $employee->setPrenom('Tebbaa');
    $employee->setAge('18');
    $employeeManager = new GestionEmployes();
    $employeeManager->Ajouter($employee);
?>