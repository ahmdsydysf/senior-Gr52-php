<?php

// session 03
// --------------
// integer = 1 2 3
// --------------
// --------------

// $num  = 10 ;
// $num1 = 0x2A ; // hexa
// $num2 = 0b11 ; // Bainary
// $num3 = 055 ;// otcta

// var_dump($num, $num1, $num2, $num3);


// // casting & juggling

// $x = (int) true ;
// $y = (int) false ;
// $t = (int) 10.50 ;
// $q = (int) '1.65';
// $q = (int) 'rt15yu65';
// $q = (int) null ;

// $o = is_int($q);
// $o = is_int('ahmed');

// var_dump($o);

// if(var_dump($o) == false) {
//     echo "aaaaaaaaaa";
// }

// $o = 20_000_000_00 ;

// echo $o ;

// Float || Double
// 100.55  101  100.4   100
//echo(0.7 + 0.1);
//echo floor((0.7 + 0.1) * 10);


// String  ''    ""
// $x = 'ahmed';
// $y = 50 ;
// echo $x[1];


// $x = "ahsdlasjdasf
//       sdjsaldaskf
// asdjlasd";

// herodoc  && nowodoc

// echo $x ;
// herodoc ""
// $parag = <<<myname
// this is $x <br>
// long paragraph
// so this is
// th end
// myname;

// // nowodoc

// $parag = <<<'mytitle'
// this is $x <br>
// long paragraph
// so this is
// th end
// mytitle;

// echo $parag ;

// Null predefined constant

// is_null()

// $myname = 'ahmed';
// // unset($myname);
// // var_dump($myname);

// var_dump((string) null);
// var_dump((int) null);
// var_dump((bool) null);
// var_dump((float) null);
// var_dump((array) null);

// Array    []    =>>  Variable multi Values
// $prog_lang1 = null;
// $prog_lang2 = 'java';
// $prog_lang3 = 'pyt';

// $prog_langs = ['php' , 'java' , 'pyt']; // indexed array

// $prog_langs[0] = 'kotlin';
// // $prog_langs[1000] = 'kotlin2';
// $prog_langs[] = 'ahmed';

// var_dump($prog_langs);

//$prog_langs = array('php' , 'pyt' , 'java');

// echo $prog_langs[-1];
// echo $prog_langs;
// var_dump($prog_langs);
// echo '<pre>';
// print_r($prog_langs);
// echo '</pre>';
// $arr2 = [2 , 3 , 5];
// var_dump($prog_langs);
// var_dump(isset($prog_langs[3]));
// var_dump(count('ahmed'));

// $my_arr = ['php' , 'java' , 'pyt' , ['ahmed', 'mohamed'] , 0 , 5 , 6.26 , null ];

// var_dump($my_arr[3]);

// $x = array_push($prog_langs, ['ahmed', 'mohamed']);
// var_dump($prog_langs);
// var_dump($x);
// echo $prog_langs[3][1];

// $arr = [ 55 , 'ahmed' , false , 0 , null];
// $arr = [ 0 => 55 , 1 => 'ahmed' , 2 => [0 => 2,1 => 5,2 => 6,3 => 8] , 3 => 0 , 4 => null];

// $testArr = ['laravel', 'spring' , 'rails'];

// $frams = ['php' => 'laravel', 'java' => 'spring' ,'ruby' => 'rails'];


// echo $frams['php'];

// echo $arr[1];
// echo $arr[2][3];

$productsData = [
0 =>  ['product1' , 2220 , '13-03-55'],
1 =>  ['product2' , 4420 , '15-03-55'],
2 =>  ['product3' , 820 , '9-03-55'],
3 =>  ['product4' , 210 , '17-03-55'],
];
$productsData = [
0 =>  ['name' => 'product1' , 'price' => 2220 , 'expDate' => '13-03-55'],
1 =>  ['product2' , 4420 , '15-03-55'],
2 =>  ['product3' , 820 , '9-03-55'],
3 =>  ['product4' , 210 , '17-03-55'],
];

// echo $productsData[0]['name'];

// $emplyee = [
//   'name' => 'ahmed sayed' ,
//   'age' => 20 ,
//   'address' => [
//     'add1' => 'cairo',
//     'add2' => 'giza'
//   ],
//   'phone' => [2545 , 6455 , 'landLine' => 26591235],
//   'description' => null
// ];

// $a1 = [10 , 20 , 0 => 30 , 40 , 0 => 100];// [ 30 , 20 , 40]

// $a1[0] = 55;

// var_dump($a1);

// $a1 = [1 => 'ahmed' , null => 'sayed' , 1 => 'mohamed' ,
//  '1' => 'one' , 55 ,  1.8 => 'float' , 68962 => 'kamal' , 999 , 18 => 7 , 60];

// $a1 = [1 => 'ahmed' , null => 'sayed' , 1 => 'mohamed' , '1' => 'one' ];

// echo $a1[1];
// // echo $a1[true];
// // echo $a1[null];

// var_dump($a1);
