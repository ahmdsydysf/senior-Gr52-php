<?php

// Functions
//parameters
// function sumAnyNums($num1, $num2)
// {
//     return $num1 + $num2 ;
// }

// $result = sumAnyNums(10, 5); // arguments

// echo $result;

// function sumAnyNums($num1, $num2)
// {
//     echo $num1 + $num2 ;
// }
//x();
// // sumAnyNums(10, 5); // arguments
// if(true) {
//     function x()
//     {
//         echo "ay aaaaaaaa";
//     }
// }


// function x()
// {
//     echo "welcome from x";

//     function y()
//     {
//         echo "from y";
//     }
// }

//x();
// y();
// require_once "config.php";
// function sum(): void
// {
//     echo "ahmed";
//     //return '1000' ;
//     //return  ;
// }
// var_dump(sum());
// declare(strict_types=1);
// function sum(): int|array|float
// {
//     return [10.64 , 55 , 6];
//     return 10.64;
//     return 10;
//     return 0;
//     return null;
//     return true;
//     return false;
//     return 1;
//     // return 'sasd';
//     // $connection = mysql_connect();
//     // return $connection ;
//     //return  ;
// }
// var_dump(sum());
// function sum(): mixed
// {
//     return [10.64 , 55 , 6];
//     return 10.64;
//     return 10;
//     return 0;
//     return null;
//     return true;
//     return false;
//     return 1;
//     // return 'sasd';
//     // $connection = mysql_connect();
//     // return $connection ;
//     //return  ;
// }
// var_dump(sum());
// function sum(): ?bool
// {
//     return 10;
//     return 0;
//     return null;
//     return true;
//     return false;
//     return 1;
//     // $connection = mysql_connect();
//     // return $connection ;
//     //return  ;
// }
// var_dump(sum());

//declare(strict_types=1);

// function sum(float|int $x, float $y): float|int
// {
//     return $x + $y;
// }

// var_dump(sum(1.67892, 2.4454));


// function sum($x, $y)
// {
//     return $x + $y ;
// }
// sum(10);
// function sum($x, $y)
// {
//     return $x + $y ;
// }
// echo sum(10, 5, 6, 9);
// function sum(int $t, $o, $x = 66, $y = 50): int
// {
//     return $x + $y ;
// }
// echo sum('2', 6);
// function sum($t, $x = 66, $y = 50, $o)
// {
//     return $x + $y ;
// }
// echo sum(2, 6 , 80 , 99);


// function tryTest(&$a, $b)
// {
//     if($a % 2  != 0) {
//         $a /= 2;// $a = $a / 2
//     }

//     return $a + $b ;
// }

// $a = 7 ;
// $b = 3 ;

// // echo tryTest(7, 3);
// var_dump($a, $b);
// echo tryTest($a, $b);
// var_dump($a, $b);

// function sum(...$nums)
// {
//     $total = 0 ;

//     foreach($nums as $num) {
//         $total += $num ; // $total = $total + $num
//     }

//     return $total ;
// }

// echo sum(1,5,8,5,3,5,8);

// function sumTest($x = 10, $y)
// {
//     return $x - $y ;
// }

// echo sumTest( y:5 , 10);


// setcookie('myname' ,secure : true);
// setcookie('myname', 'ahmed', 0, "", "", true);


// function sum($x = 1, $y = 2, $z = 5)
// {
//     return $x - $y + $z ;
// }
// //$arr = [ 1000 ,  10 , 5 , 7];
// // $arr = ['r' => 1000 , 'y' => 10 , 'z' => 55 , 'x' => 7];//error
// $arr = ['y' => 10 , 'z' => 55 , 'x' => 7];//working
// $arr = ['y' => 10 , 'z' => 55 ];//working
// echo sum(...$arr);//  sum(1000 ,  10 ,  55 , 7)
// echo sum(y : 50, x : 70, z : 99);
// echo sum(y : 50 , x : 70);
// echo sum();
//  echo sum(r:1000 ,  z :50, y :5, x : 6);
//echo sum(1000 , 50, 5,  6);
// echo sum(...$arr);
// $x = 1 ;
// include('file.php');//10
// // sum2();
// require 'file2.php';//20

// $x = 100 ;
// function sum($x)
// {
//     // global $x ;
//     echo $GLOBALS['x'];
//     // $x += 13 ;
//     // echo $x ;
// }

// // echo $x ;
// sum($x);

// function sum2()
// {
//     $x = 50;
//     echo $x ;
// }
// // echo $x ;
// function test()
// {
//     static  $x = 1;
//     //  $x++ ;// 1
//     return $x++ ; //1  -> any x = 2
// }

// echo test();//1
// echo test();//2
// echo test();//2
// echo test();//2
// echo test();//2
// // echo test();//1
// // echo test();
// // echo test();


// function sum(...$nums)
// {
//     echo array_sum($nums);
// }
// $x = ['msg'];
// if(is_callable($x)) {
//     sum(1, 2, 3, 5, 6);
// } else {
//     echo "aaaaa";
// }
// function msg()
// {
//     echo 'try again ';
// }

// $x = 'sum';
// sum();
// sum(1, 2, 3, 5, 6);


# anonymous Function  -> expression  -> assigned to variable or be invokable  -> must end with ;

// $num = function ($x, $y) {
//     echo 5;
// };
// $num(1, 2);
// $num = 10 ;

// $fn = function (int $x, int $y) use ($num): int {
//     $num *= 10 ;
//     return $x + $y * $num ;
// };

// echo $fn(5, 5);
// echo "<br>";
// echo $num;

# callback Function

//$arr = [1,2,3];
// $arrAfterMap = array_map(function ($elem) {

//     return $elem * 2;
// }, $arr); // [2 , 4 , 6 ]

// var_dump($arr, $arrAfterMap);


# arrow Function  =>   fn(parameters) => {expression}
// $arr = [1,2,3];
// $x = 11 ;

// $arrAfterMap = array_map(fn ($el) => $el * $x, $arr); // [2 , 4 , 6 ]

// var_dump($arr, $arrAfterMap);

# Handle Date and Time

// $current_time = time() + 3 * 24 * 60 * 60; //  in seconds  from 1-1-1970


// echo date('m-d-y g:ia', $current_time);

// date_default_timezone_set('Africa/Cairo');
// echo date_default_timezone_get();

// echo date('m-d-y g:ia', $current_time);


# array helper methods (chunck , combine , filter)
require_once "helper.php";

// $arra = ['a' => 1 , 'b' => 2 , 'c' => 3 , 'd' => 4 , 'g' => 6];

// show_rd_array(array_chunk($arra, 4, true));
// show_rd_array(array_chunk($arra, 2));
// show_rd_array($arra);

// $names = ['ahmed' , 'sayed' , 'you'];

// $deg = [55,60,[70,66]];

// show_rd_array(array_combine($names, $deg));

$arr = [1,2,3,4,5,6,7,8,9];

// $re = array_filter($arr, fn ($num) => $num % 2 != 0);// even
// $result = array_values($re);// even
// $result2 = array_keys($re, '3', true);// even

// show_rd_array($arr);
// show_rd_array($result2);

// $arr = [1,2,3,4,5,6,7,8,9];
// show_rd_array(array_map(fn ($nm) => $nm * 2, $arr));

// $arr1 = ['a' => 1 , 'b' => 2 , 'c' => 3 ];
// $arr2 = ['d' => 4 , 'g' => 6 , 'm' => 55 , 'o' => 80];
// show_rd_array(array_map(fn ($n1, $n2) => $n1 * $n2, $arr1, $arr2));


// if(in_array(1, $arr)) {
//     echo "yes";
// } else {
//     echo "nnnnnnnnno";
// }
