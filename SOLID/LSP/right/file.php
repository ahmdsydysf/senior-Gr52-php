<?php

abstract class File
{
    protected $filePath ;

    public function __construct($file)
    {
        $this->filePath = $file ;
    }

    public function readFile()
    {
        $myfile = fopen($this->filePath, "r") or die("Unable to open file!");
        echo fread($myfile, filesize($this->filePath));
        fclose($myfile);
    }


}
