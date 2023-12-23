<?php


class Taxi implements Vehicle, Speedable, WorkingHours
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

    public function workingHours()
    {
        echo"start work at 6am and ent at 5pm";
    }

}
