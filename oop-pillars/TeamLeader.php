<?php

class TeamLeader extends Employee
{
    public $sendVoice;

    public function getEmpID()
    {
        return  $this->logIn();
    }


    public function makeTask() {}

    public function setMetting() {}
}
