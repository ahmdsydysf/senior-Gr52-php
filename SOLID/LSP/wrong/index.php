<?php


require_once "file.php";
require_once "fileReadOnly.php";

$f = new File('sometext.txt');
$f->writeOnFile('my name is ahmed');
$f->readFile();

// the wrong will be on the below code
$f = new FileReadOnly('sometext.txt');
$f->writeOnFile('my name is ahmed');
$f->readFile();
