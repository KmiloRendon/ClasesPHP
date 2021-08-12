<?php
require_once ('Employee.php');

$employee = new Employee (60);
$employee->setName('Pacho');
$employee->setLastName('Gonzalez');
var_dump($employee->getUserId());
var_dump($employee->getPassword());


var_dump($employee->getFullName());
