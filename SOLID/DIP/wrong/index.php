<?php

require_once "exportPdf.php";
require_once "exportPpt.php";
require_once "exportFile.php";


$myFile = new ExportFile(new ExportPdf());

$myFile->exporting()->convertToPdf('new.txt') ;

// the wrong

$myFile = new ExportFile(new ExportPpt());

$myFile->exporting()->convertToPpt('new.txt') ;
