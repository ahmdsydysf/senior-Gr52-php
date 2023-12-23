<?php


require_once "ahly.php";
require_once "masr.php";
require_once "payment.php";

$newPayment = new Payment();



var_dump($newPayment->startPayment('Ahly')->withdrawAhly());

// $newPayment->startPayment('Ahly')->depositAhly();
// $newPayment->startPayment('Ahly')->withdrawAhly();
// $newPayment->startPayment('Masr')->depositMasr();
// $newPayment->startPayment('Masr')->withdrawMasr();
