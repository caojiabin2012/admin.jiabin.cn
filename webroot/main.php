<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__DIR__));
require ROOT_PATH.'/vendor/autoload.php';
use ZPHP\ZPHP;
ZPHP::run(ROOT_PATH);
