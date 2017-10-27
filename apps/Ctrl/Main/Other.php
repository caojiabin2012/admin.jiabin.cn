<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use ZPHP\View;

use Common;

class Other extends \Ctrl\Admin implements IController
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

    public function plan()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/other/plan.php');
        $view->display();
    }

}

