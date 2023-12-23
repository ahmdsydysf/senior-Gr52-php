<?php

require_once "user.php";
require_once "admin.php";
require_once "manager.php";
require_once "database.php";

$ahmedUser = new User();

$databaseData = new Database($ahmedUser);

$databaseData->yourUserData()->getName();
