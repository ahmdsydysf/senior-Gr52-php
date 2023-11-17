<?php

require_once "config.php" ;

$query = "INSERT INTO somedepartments ( department_id , department_name , manager_id , location_id ) 

          VALUES (50 , '$_POST[username]' , 100 , 1700) ";

$ex = mysqli_query($my_connection, $query);

header('location:regestration.php');
// mysqli_error($my_connection)
