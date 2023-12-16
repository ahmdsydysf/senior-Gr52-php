<?php


class Ahmed extends User
{
    public $name;
    public $age;
    private $pass;


    public function __construct($myage, $name = 'no name', $password = 123)
    {
        $this->name = $name;
        $this->age = $myage;
        $this->pass = $password;
    }



    public function setNewPass($newPass, $oldPass)
    {
        if($oldPass == $this->pass) {

            $this->pass = $newPass;
        } else {
            echo "error please check your old password";
        }
    }
}
