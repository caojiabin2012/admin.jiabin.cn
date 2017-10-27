<?php
namespace Socket;

use ZPHP\Protocol\Request;
use ZPHP\Socket\Callback\Swoole as ZSwoole;
use ZPHP\Socket\IClient;
use ZPHP\Core\Route as ZRoute;

class Swoole extends ZSwoole
{

	public function onConnect()
	{
		echo "on Connect";
	}
	public function test()
    {
//        $server = new Swoole
    }

    public function onReceive()
    {
        list($server, $fd, $fromId, $data) = func_get_args();
        if (empty($data)) {
            return;
        }
        Request::parse($data);
        $result = ZRoute::route();
        echo 'task start'.date('Y-m-d H:i:s')."\r\n";
        $server->task($result);
        echo 'task end'.date('Y-m-d H:i:s')."\r\n";
        $server->send($fd, $result);
    }

    public function onTask($server, $taskId, $fromId, $data)
    {
		echo date('Y-m-d H:i:s')."onTask\r\n";

		var_dump($data);
		$server->finish("$data");
		// return 'onTask';
    }

    public function onFinish($server, $taskId, $data)
    {
    	echo date('Y-m-d H:i:s').$data."finish\r\n";
    }
}
