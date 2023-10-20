<?php
// SuperGlobal Variables  => GET   POST
//  $_GET   $_POST

// $_GET => array []

// $_POST  => array []

var_dump($_GET);
var_dump($_POST);
// if($_POST) {
//     $un = $_POST['unamer'];
// }
// var_dump($_POST == true)
// $data = [
//           'uname'  =>  'Ruby Rosario' ,
//           'upw'   =>  'Nostrum quia aliquam' ,
//           'email' =>  'ryqumomu@mailinator.com',
//           'msg'   =>  'At dolore id quia h'
// ];
// echo $data['msg'];
if(isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['upw']) && isset($_POST['msg'])) {
    $un = $_POST['uname'];
    $pw = $_POST['upw'];
    $em = $_POST['email'];
    $msg = $_POST['msg'];

    $all_errors = [];

    // $all_errors['a'] = 'ahmed';
    // echo $un , $pw , $em , $msg ;

    // echo $_POST['uname'] , $_POST['upw'] , $_POST['email'] ,$_POST['msg'];
    //   if(!empty($un)) {
    //     if(strlen($un) >= 5) {
    //         if(preg_match('/senior$/', $un)) {
    //             echo "username is correct";
    //         } else {
    //             $all_errors['un_senior'] = 'plz use senior keyword on username ';
    //         }
    //     } else {
    //         $all_errors['un_length'] = 'plz enter username min len = 5';
    //     }
    // } else {
    //     $all_errors['un_empty'] = 'plz enter username ';
    // }
    if(empty($un)) {
        $all_errors['un_empty'] = 'plz enter username ';
    }
    if(strlen($un) < 5) {
        $all_errors['un_length'] = 'plz enter username min len = 5';
    }

    if(!preg_match('/senior$/', $un)) {
        $all_errors['un_senior'] = 'plz use senior keyword on username ';
    }




    if(!empty($pw)) {
        if(strlen($pw) >= 8) {
            if(preg_match('@[A-Z][a-z]@', $pw)) {
                echo "password is correct";
            } else {
                $all_errors['pw_alpha'] = 'plz use A-Z keyword on password ';
            }
        } else {
            $all_errors['pw_length'] = 'plz enter password min len = 5';
        }
    } else {
        $all_errors['pw_empty'] = 'plz enter password ';
    }

    // if(!empty($un) && strlen($un) >= 8) {

    //     echo "great";

    // } else {
    //     echo 'plz enter username ';
    // }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<?php if(! empty($all_errors)) : ?>
  <?php foreach($all_errors as $error) : ?>

    <div class="alert alert-info">
      <?= $error ?>
    </div>

  <?php endforeach ?>
<?php endif ?>
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
  <button form="loginForm" name="btn" value="login-btn" >login</button>
</form>
</body>
</html>