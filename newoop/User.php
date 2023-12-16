<?php


class User
{
    public DB $database ;



    public function __construct($database)
    {
        $this->database = $database;
    }

}
