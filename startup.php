<?php

$connection = mysqli_connect('localhost', 'root', '', 'group-52');
$stat = "insert into users (name , password , type) values ('admin' , 'admin123' , 'super_admin' )";
$query = mysqli_query($connection, $stat);
