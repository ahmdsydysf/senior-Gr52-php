<?php

abstract class Shape
{
    public $x;
    public $y;

    public function dimention($x, $y)
    {
        return $x * $y;
    }

    abstract public function Omar();

}
