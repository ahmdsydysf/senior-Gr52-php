<?php

// mullti inhertance is   Trait
class Triangle extends Shape
{
    public function dimention($x, $y)
    {
        return ($x + $y) * 2 ;
    }

}
