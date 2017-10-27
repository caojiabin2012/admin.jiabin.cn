<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use ZPHP\View;

use Common;


class Format extends \Ctrl\Admin implements IController
{

    public function _before()
    {
        // parent::_before();
        return true;
    }

    public function _after()
    {
        //
    }

    public function unixtime()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/unixtime.php');
        $view->display();
        // return ['data' => ['data' => ['zphp' => 'afa']];
    }

    public function html()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/html.php');
        $view->display();

        // return ['data' => ['data' => ['zphp' => 'afaaa']];
    }

    public function css()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/css.php');
        $view->display();
    }

    public function javascript()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/javascript.php');
        $view->display();
    }

    public function php()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/php.php');
        $view->display();
    }

    public function java()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/java.php');
        $view->display();
    }

    public function ruby()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/ruby.php');
        $view->display();
    }

    public function sql()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/sql.php');
        $view->display();
    }

    public function http()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/http.php');
        $view->display();
    }

    public function json()
    {
        return [];
        
        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/format/json.php');
        $view->display();
    }

    public function xml()
    {
        return [];
    }

    public function jsond()
    {
        echo 1131;
        return 2342;
    }










}

