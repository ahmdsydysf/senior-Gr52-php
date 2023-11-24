<?php

session_start();
$connection = mysqli_connect('localhost', 'root', '', 'group-52');
$all_errors = [];
$flag = 0;

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username)) {
        if(strlen($username) > 3) {
            if(preg_match('/senior/', $username)) {
                $flag++ ;
            } else {
                $all_errors['preg_un'] = 'plz fill username contain senior';

            }
        } else {
            $all_errors['len_un'] = 'plz fill username more than 3 char';

        }
    } else {
        $all_errors['empty_un'] = 'plz fill username';
    }

    if(!empty($password)) {
        if(strlen($password) > 8) {
            if(preg_match('@[A-Za-z]@', $password)) {
                $flag++ ;
            } else {
                $all_errors['preg_pw'] = 'plz fill password contain senior';

            }
        } else {
            $all_errors['len_pw'] = 'plz fill password more than 8 char';

        }
    } else {
        $all_errors['empty_pw'] = 'plz fill password';
    }
    $allowed_ext = ['png' , 'jpg'];
    $myimg = $_FILES['image'];
    $img_size = $myimg['size'];
    $img_tmp = $myimg['tmp_name'];
    $img_name = uniqid() . $myimg['name'];

    // to get image ext
    $img_expload = explode('.', $img_name);
    $img_end_ext = end($img_expload);
    $img_ext = strtolower($img_end_ext);

    if($myimg['error'] != 4) {
        if($img_size < 2097152) {
            if(in_array($img_ext, $allowed_ext)) {
                if($flag == 2) {

                    $stat = "insert into users (name , password , image) values ('$username' , '$password' , '$img_name')";
                    $query = mysqli_query($connection, $stat);
                    move_uploaded_file($img_tmp, '../uploads/profile/' . $img_name);

                    header('location:../login.php');
                }
            } else {
                $all_errors['size_ext'] = 'plz upload file png or jpg';
            }
        } else {
            $all_errors['size_img'] = 'plz upload file less than 2 miga';
        }
    } else {
        if($flag == 2) {
            $stat = "insert into users (name , password ) values ('$username' , '$password')";
            $query = mysqli_query($connection, $stat);
            header('location:../login.php');
        }
    }


    if($flag != 2 && !empty($all_errors)) {
        foreach($all_errors as $k => $val) {
            $_SESSION['error_msg'][$k] = $val;
            header('location:../register.php');
        }
    }

}
