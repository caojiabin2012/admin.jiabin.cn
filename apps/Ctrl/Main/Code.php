<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\View;
use Common;
use Overtrue\Pinyin\Pinyin;

class Code extends \Ctrl\Admin implements IController
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

    public function highlight()
    {
        return [];
        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/code/highlight.php');
        $view->display();
    }

    public function diff()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/code/diff.php');
        $view->display();
    }

    public function compare()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/code/compare.php');
        $view->display();
    }

    public function translate()
    {
        return [];
    }

    public function translateData()
    {
        $params         = Request::getParams();
        $str            = $params['str'];
        $type           = $params['type'];
        $pinyin = new Pinyin();
        if($type == 0) {
            $data = $pinyin->sentence($str, true);
        }elseif ($type == 1) {
            $data = $pinyin->name($str, PINYIN_UNICODE);
        }
        return ['_view_mode' => 'Json', 'pinyin' => $data];
    }
}

