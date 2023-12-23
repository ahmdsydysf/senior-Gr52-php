<?php

class Car implements Vehicle, Speedable, ChildrenTransportation
{
    public function move()
    {
        echo"move the car";
    }
    public function stop()
    {
        echo"stop the car";
    }
    public function accelerate()
    {
        echo"make min speed 200 km/h";
    }
    public function openDoor()
    {
        echo"open doors";
    }

    public function childrenTransportation()
    {
        echo"transportation for children from and to school";
    }
}
