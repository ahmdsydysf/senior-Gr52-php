<?php

require_once "Player.php";
require_once "Car.php";
require_once "Database.php";


function sTest()
{
    static  $i = 0 ;
    while($i < 10) {
        echo "ahmed";
        $i++;
        sTest();
    }
}
sTest();
