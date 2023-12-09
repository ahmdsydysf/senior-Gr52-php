<?php


class Player
{
    // blueprint for any object of
    // access modifiers => public , protected , private
    // oop   func => method  var => property  props
    public ?string $name = 'ahmed' ; // ? nullable type property
    public ?array $position = null;
    public $speed;

    public ?Database $db;


    protected $color;
    private int $age;
    public const club_name = "a_fc";
    public function show(): string
    {
        return $this->name;
    }
    public function setColor($clr)
    {
        $this->color = $clr;
    }
    public function getColor()
    {
        echo $this->color;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        echo $this->age;
    }


}
