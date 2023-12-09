<?php


class Car
{
    public $password = 123456;

    public $name;

    public static $x = 'omar' ;

    public function test()
    {
        return  self::$x ;
    }

    public function show()
    {
        return $this;
    }
    public function show2() {}

    public function setPassword($new_pass)
    {
        $this->password = sha1($new_pass);
    }
    public function getPassword()
    {
        echo $this->password;
    }


}
