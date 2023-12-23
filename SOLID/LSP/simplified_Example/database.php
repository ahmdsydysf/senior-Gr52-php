<?php

class Database
{
    private User $user ;
    public function __construct(User $user)
    {
        $this->user = $user ;
    }

    public function yourUserData()
    {
        return $this->user;
    }
}
