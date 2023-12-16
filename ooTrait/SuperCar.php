<?php


class SuperCar extends Car
{
    use Engine ;
    use Fast;
    public function openDoor()
    {
        echo "open from super car class";
    }
}
