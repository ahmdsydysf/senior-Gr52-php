
<?php


$max_int = PHP_INT_MAX ;

$arr = [];

$arr[1] = 'last name';

$arr[ $max_int ] = 'this is max of array ';

$arr[0] = 'first name';
var_dump($arr, $max_int);

$arr[]  = 'this may be at the last of array';
