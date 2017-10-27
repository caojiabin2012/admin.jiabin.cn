<?php
#require '../vendor/autoload.php';
#use ZPHP\ZPHP;
define('ROOT_PATH', dirname(__DIR__));
#require '../../framework/zphp'. DIRECTORY_SEPARATOR . 'ZPHP' . DIRECTORY_SEPARATOR . 'ZPHP.php';
#ZPHP::run(ROOT_PATH);
#var_dump($_SERVER['argv']);

require ROOT_PATH.'/vendor/autoload.php';
use ZPHP\ZPHP;
ZPHP::run(ROOT_PATH);
