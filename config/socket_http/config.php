<?php
use \ZPHP\Socket\Adapter\Swoole;

return array(
    'server_mode' => 'Socket',
    'project_name' => 'admin.jiabin.cn',
    'project' => [
        'app_host' => '192.168.1.163:8888',
        'default_ctrl_name' => 'Main\Main',
        'tpl_path' => ZPHP\ZPHP::getRootPath() . DS . 'template' . DS . 'admin' . DS,
    ],
    'app_path' => 'apps',
    'ctrl_path' => 'Ctrl',
    'socket' => array(
        'host' => '0.0.0.0',                          //socket 监听ip
        'port' => 8992,                             //socket 监听端口
        'adapter' => 'Swoole',                          //socket 驱动模块
        'server_type' => Swoole::TYPE_HTTP,              //socket 业务模型 tcp/udp/http/websocket
        'protocol' => 'Http',                         //socket通信数据协议
        'daemonize' => 1,                             //是否开启守护进程
        'client_class' => 'Socket\\SwooleHttp',            //socket 回调类
        'work_mode' => 3,                             //工作模式：1：单进程单线程 2：多线程 3： 多进程
        'worker_num' => 4,                                 //工作进程数
        'max_request' => 100,                            //单个进程最大处理请求数
        'debug_mode' => 0,                                  //打开调试模式
    ),
    'session'=> array(
        'adapter' => 'Redis',
        'name' => 'sso',
        'pconnect' => true,
        'host' => '127.0.0.1',
        'port' => 6379,
        'timeout' => 0,
        'session_name'=>'ZPHP_SID',
        'cache_expire' => 20160,
        'path' => '/',
        'serure'=>false,
        'httponly'=>true,
    ),

);
