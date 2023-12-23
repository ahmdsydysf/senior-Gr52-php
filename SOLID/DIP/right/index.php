<?php

require_once "exportDownloadInterface.php";
require_once "exportPdf.php";
require_once "exportPpt.php";
require_once "exportFile.php";


$myFile = new ExportFile(new ExportPdf());

$myFile->exporting()->downloadExported('new.txt') ;

$myFile = new ExportFile(new ExportPpt());

$myFile->exporting()->downloadExported('new.txt') ;
