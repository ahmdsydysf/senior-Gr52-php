<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>


<?php

// $myname = "ahmed" ;

// echo "my name is $myname";

$name = 'ahmed';
echo $name ;
$name  = 'sayed';


// echo 'my fullname is ' , $firstname , ' ' , $lastname , ' and my age is 20';
// echo 'my fullname is ' . $firstname . ' ' . $lastname . ' and my age is 20';

echo "my name is $name $name and my age is 20";

ob_end_flush();
