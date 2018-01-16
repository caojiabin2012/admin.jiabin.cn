<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\View;
use Common;

class Article implements IController
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

    public function git()
    {
        return [];
    }

}

