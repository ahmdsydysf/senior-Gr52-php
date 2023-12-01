<?php

$con = mysqli_connect('localhost', 'root', '', 'ajax_test_gr52');
$stat = 'select * from std';
$excut = mysqli_query($con, $stat);
$count = mysqli_num_rows($excut);

if($count > 1) {
    $allData = [];
    while($row = mysqli_fetch_assoc($excut)) {
        $allData[] = $row ;
    }
} else {
    $allData[] = mysqli_fetch_assoc($excut);
}

echo json_encode($allData);
