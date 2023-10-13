<?php
require_once "database.php";

$users_data = [
  ['username' => 'ahmed sayed' , 'pass' => 123456],
  ['username' => 'mohamed sayed' , 'pass' => 896523],
  ['username' => 'islam mohamed' , 'pass' => 15975],
  ];

$username = 'islam mohamed';
$password = 15975;
$flag = 0 ;

foreach($users_data as $user) {
    // var_dump($user);
    if($user['username'] == $username && $user['pass'] == $password) {
        $flag = 1;
        // echo "data is correct";
        break;
    }
}

// if($flag == 1) {
//     header('location:home.php');
// } else {
//     header('location:404.php');
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<input type="text" name='test' form="loginForm" >test


  <form method="get" action="" id="loginForm"> 
    <input type="text" name="uname" >username
    <input type="text" name="upw" value="">password
    <!-- <input type="radio">male
    <input type="radio">female -->
    <!-- <input type="submit" value="input 2"> -->
  
    <!-- <button type='submit'>login</button> -->
    <!-- <button type='button'>button</button>
    <button type='reset'>rest</button> -->
  </form>
  <button form="loginForm" >login</button>



</body>
</html>