<?php

class File
{
    private $filePath ;

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

    public function writeOnFile(string $dataToWrite)
    {
        $myfile = fopen($this->filePath, "w") or die("Unable to open file!");
        $txt = $dataToWrite;
        fwrite($myfile, $txt);
        fclose($myfile);
        echo " done";
    }
}
