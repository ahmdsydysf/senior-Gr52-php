<?php


class FileReadOnly extends File
{
    public function writeOnFile(string $dataToWrite)
    {
        throw new Exception("this is only readFile");
    }
}
