<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\View;
use Common;

class IP extends \Ctrl\Admin implements IController
{

    public function _before()
    {
        parent::_before();
        return true;
    }

    public function _after()
    {
        //
    }

    public function index()
    {
        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/ip/index.php');
        $view->display();
    }

    public function getIP(){
        $view = View\Factory::getInstance('String');
        $view->setModel('127.0.0.1');
        $view->display();
    }
}
