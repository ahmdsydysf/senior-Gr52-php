<?php


class Bus implements Vehicle, WorkingHours, ChildrenTransportation
{
    public function move()
    {
        echo"move the car";
    }
    public function stop()
    {
        echo"stop the car";
    }

    public function openDoor()
    {
        echo"open doors";
    }

    public function workingHours()
    {
        echo"start work at 6am and ent at 5pm";
    }
    public function childrenTransportation()
    {
        echo"transportation for children from and to school";
    }
}
