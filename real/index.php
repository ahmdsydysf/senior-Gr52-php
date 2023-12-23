<?php


// require_once "DbInt.php";
// require_once "Database.php";

// $first = new Database();

// // var_dump($first->select('users', 'name')->where('id', '=', 1002)->snglData());
// // $first->dataToInsert('ahmed sayed', 'ahmed123')->insert('users', $first->insertedData);
// // $first->delete('users')->where('id', '=', 15508)->excu();
// $first->dataToInsert('ahmed sayed', 'ahmed123')
// ->edit('users', $first->insertedData)
// ->where('id', '=', 1000)
// ->excu();
// ;

$con = mysqli_connect('localhost', 'root', '', 'hr_db');
$stat = "select emp_id , emp_name , is_admin(role) AS Named_ROle from my_emps ";
// $stat = "CALL getData(2)";

$r = mysqli_query($con, $stat);

var_dump(mysqli_fetch_assoc($r));
var_dump(mysqli_fetch_assoc($r));
