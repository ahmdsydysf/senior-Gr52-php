<?php

require_once "Emp.php";
require_once "TeamLeader.php";

$karim = new Employee();
$karim->id = 50 ;
$karim->logIn();// return this->id
$karim->logOut();// return this->id

// $mohamed = new TeamLeader();

// var_dump($mohamed->getEmpID());

// php not multi inheritance language
