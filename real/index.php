<?php


require_once "DbInt.php";
require_once "Database.php";

$first = new Database();

var_dump($first->select('users', 'name')->where('id', '=', 1002)->snglData());
