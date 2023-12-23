<?php


require_once "paymentInterface.php";
require_once "masr.php";
require_once "ahly.php";
require_once "QNB.php";
require_once "payment.php";
$x = new Masr();
$newPayment = new Payment($x);

var_dump($newPayment->startPayment());
// $newPayment->startPayment()->deposit();
// $newPayment->startPayment()->withdraw();

// $newPayment = new Payment(new Masr());

// $newPayment->startPayment()->deposit();
// $newPayment->startPayment()->withdraw();
