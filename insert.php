<?php

$data = file_get_contents("php://input"); // get all data which requested to this page
//
$finalPHPdata = json_decode($data, true);

$name = $finalPHPdata['name'];
$email = $finalPHPdata['email'];
$password = $finalPHPdata['password'];
$id = intval($finalPHPdata['id']);

$con = mysqli_connect('localhost', 'root', '', 'ajax_test_gr52');
$stat = "insert into std (id ,name , email , password) 
            values ($id , '$name','$email','$password') 
            on Duplicate key update name='$name' , email='$email',password='$password'";
$q = mysqli_query($con, $stat);

if(!mysqli_error($con)) {
    echo "تم اضافة الطالب بنجااااااااااح";
} else {
    echo " هناك مشكله " ;
}
