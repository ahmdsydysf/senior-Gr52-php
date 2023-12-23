<?php

require_once "ProfileImage.php";
class User
{
    // public ProfileImage $image ;
    public function create(ProfileImage $img)
    {
        echo "user created";
        $img->upload();
    }

    public function update()
    {
        echo "user update";
    }

    public function delete()
    {
        echo "user delete";
    }

}
