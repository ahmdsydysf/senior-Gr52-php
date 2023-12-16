<?php

//Magic Method
// constract :
require_once "User.php";
require_once "Ahmed.php";
require_once "DB.php";


$database = new DB();// SOLID
$ahmed = new User($database);
// $ahmed = new User($payment);
$ahmed->database->testFromDatabase();

// $karim = new Ahmed(80) ;
// var_dump($karim);
// $karim->setNewPass(989898, 123);
// var_dump($karim);


// $omar = new Ahmed(30, 'omar', 'Omar123');

// var_dump($omar);
