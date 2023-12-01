<?php

$data = file_get_contents("php://input"); // get all data which requested to this page
//
$finalPHPdata = json_decode($data, true);
$std_id = $finalPHPdata['id'];
$con = mysqli_connect('localhost', 'root', '', 'ajax_test_gr52');
$stat = "select * from std where id = $std_id";
$qu = mysqli_query($con, $stat);
$student_data = mysqli_fetch_assoc($qu);

echo json_encode($student_data);
