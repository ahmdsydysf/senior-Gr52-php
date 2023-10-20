<?php
session_start();

var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST);
var_dump($_SESSION);

$data = [
  ['name' => 'ahmed' , 'pw' => 123],
  ['name' => 'mohamed' , 'pw' => 456],
];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach($data as $k => $user) {
        if($_POST['uname'] == $user['name'] && $_POST['upw'] == $user['pw']) {
            $_SESSION['welcom_nm'] = $_POST['uname'];
            header('location:home.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <form method="post" action="" id="loginForm"> 

    <input type="text" name="uname" >username
    <input type="text" name="upw" value="">password

  </form>
  <button form="loginForm" >login</button>



</body>
</html>