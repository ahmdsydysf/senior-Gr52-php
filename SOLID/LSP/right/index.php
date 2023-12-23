<?php


require_once "file.php";
require_once "fileReadOnly.php";
require_once "fileReadWrite.php";

$f = new FileReadOnly('sometext.txt');
$f->writeOnFile('my name is ahmed');
$f->readFile();
