<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\View;
use Common;

class Refre extends \Ctrl\Admin implements IController
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

    public function useragent()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/useragent.php');
        $view->display();
    }

    public function portcode()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/portcode.php');
        $view->display();
    }

    public function asciilist()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/asciilist.php');
        $view->display();
    }

    public function escapechar()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/escapechar.php');
        $view->display();
    }

    public function httpcode()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/httpcode.php');
        $view->display();
    }

    public function contenttype()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/contenttype.php');
        $view->display();
    }

    public function httprequest()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/httprequest.php');
        $view->display();
    }

    public function websafecolors()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/websafecolors.php');
        $view->display();
    }

    public function androidmanifest()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/refre/androidmanifest.php');
        $view->display();
    }
}

