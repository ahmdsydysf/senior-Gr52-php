<?php


class ExportFile
{
    private $exportProgressOnFile ;

    public function __construct(ExportDownloadFile $file)
    {
        $this->exportProgressOnFile = $file ;
    }

    public function exporting()
    {
        return $this->exportProgressOnFile ;
    }
}
