<?php

//  &&  two sides is true
//  || one or two sides are true
//  Xor  => one side is true not both
//--------------------------------------------
//--------------------------------------------
//  0    0   0   0    0  0  1  0
// 128  64  32  16    8  4  2  1

//  0000 0001  ==  1
//  0000   1111   ==  15
// 0100 0110    ==  70

// bitwise operator
// &

// var_dump(5 & 0); // 0  0000 0101  &  0000 0000  =>         0000 0000

// var_dump(5 & 8); // 0    0000 0101  &  0000 1000  =>       0000 0000

// var_dump(5 & 5); // 5    0000 0101  &  00000 0101  =>      0000 0101

// var_dump(5 | 8); // 13   0000 0101  |  0000 1000  =>       0000  1101

// var_dump(5 ^ 3);// Xor  0000 0101  ^  0000 0011   =>     0000  0110

// var_dump(~6 & 3);// 11111001  &   0000 0011  =>   0000 0001

// var_dump(6  >>  1);//   0000  0011
// var_dump(6  <<  3);//   0011   0000

// array

// $x = ['a' , 'b'];
// $y = ['c' , 'd' , 'g'];
// var_dump($x + $y);

// $x = ['a' , 'b'];
// $y = ['c' , 'd'];
// var_dump($x + $y);

// $x = ['aa' => 'a'  , 'bb' => 'b'];
// $y = ['cc' => 'a'  , 'dd' => 'b'];
// var_dump($x + $y);


// $x = [ 10 =>  1  , 20 =>   '2'];
// $y = ['10' => 1  , '20' => 2];
// var_dump($x == $y);


// --------------- IF --------------------

// if(condition){
//   // code to do if  true
// }

// $age = 50 ;
// $speed = 750 ;

$deg = 75 ;
// if('ahmed' == 'ahmed' && $age > 20  &&  $speed > 1000) {
//     echo "10";
// }

if($deg >= 90) {
    echo 'success A+';
} elseif($deg >= 80  &&  $deg < 90) {
    echo 'success B';
} elseif($deg  < 80  &&  $deg >= 50) {
    echo 'just success';
} else {
    echo 'F';
}

// if($age < 10 ||  $speed == '7500') {
//     echo 'success';
// } else {
//     echo 'fail';
// }

$login = false ;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        
        <?php if($login) : ?>
          <button class="btn btn-outline-danger" type="submit">logout</button>
        <?php else: ?>
          <button class="btn btn-outline-success" type="submit">login</button>
          <button class="btn btn-outline-info" type="submit">register</button>
        <?php endif ?>
      </form>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
