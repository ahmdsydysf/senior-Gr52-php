<?php

$data = file_get_contents("php://input");
$finalPHPdata = json_decode($data, true);
$std_id = $finalPHPdata['id'];
$st_data = "select name from std where id = $std_id";
$con = mysqli_connect('localhost', 'root', '', 'ajax_test_gr52');
$stat = "delete from std where id = $std_id";
$qu = mysqli_query($con, $st_data);
$std = mysqli_fetch_assoc($qu);
$excut = mysqli_query($con, $stat);


echo " student $std[name] is deleted";
