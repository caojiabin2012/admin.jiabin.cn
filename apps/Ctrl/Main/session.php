<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\View;
use ZPHP\Session\Factory as ZSession;
use ZPHP\Protocol\Request;

class Session implements IController
{
    public function _before()
    {
        ZSession::start();
        return true;
    }

    public function _after()
    {
        //
    }

    public function set()
    {
        $_SESSION = [
            'k1'=>'v1',
            'a',

        ];

        return [
            '_view_mode'=>'Json',
            'set' => 'ok'
        ];
    }

    public function get()
    {
        return [
            '_view_mode'=>'Json',
            'session' => $_SESSION
        ];;
    }

    public function delete()
    {
        unset($_SESSION);
        return [
            '_view_mode'=>'Json',
            'delete' => 'ok'
        ];
    }

    public function main()
    {
        $project = Config::getField('project', 'name', 'zphp');
        $data = $project . " runing!\n";
        $params = Request::getParams();
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                $data .= "key:{$key}=>{$val}\n";
            }
        }
        // return [
        //     '_view_mode'=>'Json',
        //     'delete' => 'ok'
        // ];
        return ['data' => ['data' => ['zphp' => $data]]];
    }
}

