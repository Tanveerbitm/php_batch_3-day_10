<?php
require_once 'vendor/autoload.php';

use App\classes\Example;


$ex  = new Example();
$ex->set(9);
$ex->fibonacci();
$ex->prime();
$ex->setArray();


