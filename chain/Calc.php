<?php


class Calc
{
    public $x;
    public $y;
    public $res ;

    public function __construct($num1, $num2, $operator)
    {
        $this->x = $num1;
        $this->y = $num2 ;

        switch($operator) {
            case '+':
                $this->add();
                break;
            case '-':
                $this->minus();
                break;

            case '*':
                $this->multi();
                break;

            case '/':
                $this->div();
                break;

        }
        echo $this->getResult();

    }
    public function Add()
    {
        $this->res =   $this->x + $this->y;
        return $this;
    }
    public function minus()
    {
        $this->res =  $this->x - $this->y;
        return $this;
    }
    public function multi()
    {
        $this->res =  $this->x * $this->y;
        return $this;
    }
    public function div()
    {
        $this->res =  $this->x / $this->y;
        return $this;
    }

    public function getResult()
    {
        return $this->res;
    }


}
