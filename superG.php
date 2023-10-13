<?php
// SuperGlobal Variables  => GET   POST
//  $_GET   $_POST

// $_GET => array []

// $_POST  => array []

var_dump($_GET);
var_dump($_POST);
$username = $_POST['uname'];
$password = $_POST['upw'];
$email = $_POST['email'];
$msg = $_POST['msg'];

echo $username , $password , $email , $msg ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<!-- <form method="" action="" id="loginForm"> 
<form  action="" id="loginForm">  -->
<form method="post" action="" id="loginForm"> 
  <input type="text" name="uname" >username
  <input type="text" name="upw" value="">password
  <input type="text" name="email" value="">email
  <input type="text" name="msg" value="">message

  <button form="loginForm" >login</button>
</form>
</body>
</html>