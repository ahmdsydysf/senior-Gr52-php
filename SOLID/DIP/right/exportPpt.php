<?php


class ExportPpt implements ExportDownloadFile
{
    public function downloadExported($file)
    {
        echo "convert is success for this $file to PowerPointFile";
    }
}
