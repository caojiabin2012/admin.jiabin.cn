<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use ZPHP\View;

use Common;

class Connect extends \Ctrl\Admin implements IController
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

    public function mysql(){

        $view = View\Factory::getInstance('Php');
        $view->display();
    }

    public function getIP(){
        $view = View\Factory::getInstance('String');
        $view->setModel('127.0.0.1');
        $view->display();
    }


}