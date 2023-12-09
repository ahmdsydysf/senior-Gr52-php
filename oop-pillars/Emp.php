<?php


class Employee implements EmployeeInterface
{
    // interface is the blueprint for the class , class standard
    public $name;
    public $salary;
    public $id = 10;

    public function logIn($id, $myname)
    {
        return 'login';
    }
    public function logOut()
    {
        return 'login';
    }


}
