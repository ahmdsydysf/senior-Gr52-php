<?php
// SuperGlobal Variables  => GET   POST
//  $_GET   $_POST

// $_GET => array []

// $_POST  => array []

var_dump($_GET);
var_dump($_POST);


// $data = [
//           'uname'  =>  'Ruby Rosario' ,
//           'upw'   =>  'Nostrum quia aliquam' ,
//           'email' =>  'ryqumomu@mailinator.com',
//           'msg'   =>  'At dolore id quia h'
// ];
// echo $data['msg'];
$un = $_POST['uname'];
$pw = $_POST['upw'];
$em = $_POST['email'];
$msg = $_POST['msg'];

echo $un , $pw , $em , $msg ;

echo $_POST['uname'] , $_POST['upw'] , $_POST['email'] ,$_POST['msg'];
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
  <!-- $_GET['uname'] -->

  <input type="text" name="upw" value="">password
  <!-- $_GET['upw'] -->

  <input type="text" name="email" value="">email
  <!-- $_GET['email'] -->

  <input type="text" name="msg" value="">message
  <!-- $_GET['msg'] -->


<!-- <textarea name="" id="" cols="30" rows="10"></textarea>
<input type="checkbox" name="" id="">
<input type="checkbox" name="" id="">
<input type="checkbox" name="" id="">

<input type="radio" name="" id="">
<input type="radio" name="" id="">

<input type="number" name="" id="">
<input type="color" name="" id="">
<input type="file" name="" id="">

<select name="" id="">
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
</select> -->
  <button form="loginForm" >login</button>
</form>
</body>
</html>