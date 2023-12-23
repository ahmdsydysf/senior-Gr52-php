<?php


class FileReadWrite extends File
{
    public function writeOnFile(string $dataToWrite)
    {
        $myfile = fopen($this->filePath, "w") or die("Unable to open file!");
        $txt = $dataToWrite;
        fwrite($myfile, $txt);
        fclose($myfile);
        echo " done";
    }
}
