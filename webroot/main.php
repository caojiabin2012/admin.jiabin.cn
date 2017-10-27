<?php
#require '../vendor/autoload.php';
#use ZPHP\ZPHP;
#define('ROOT_PATH', dirname(__DIR__));
#require '../../framework/zphp'. DIRECTORY_SEPARATOR . 'ZPHP' . DIRECTORY_SEPARATOR . 'ZPHP.php';
#ZPHP::run(ROOT_PATH);
#var_dump($_SERVER['argv']);


define("ROOT_PATH", dirname(__DIR__));
require ROOT_PATH.'/vendor/autoload.php';

#$log = new Monolog\Logger('name');
#$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

#$log->addWarning('Foo');

#use Overtrue\Pinyin\Pinyin;

// 小内存型
#$pinyin = new Pinyin(); // 默认
#$data = $pinyin->convert('带着希望去旅行，比到达终点更美好');
#var_dump($data);

use ZPHP\ZPHP;
ZPHP::run(ROOT_PATH);
