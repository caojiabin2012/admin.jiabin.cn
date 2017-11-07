<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use ZPHP\View;

use Common;

use Overtrue\Pinyin\Pinyin;

class Document extends \Ctrl\Admin implements IController
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

    public function linux()
    {
        return [];
    }

    public function php()
    {
        return [];
    }

    public function zikao()
    {
        return [];
    }

    public function svn()
    {
        return [];
    }

    public function regular()
    {
        $regular = Common\LoadClass::getDao('Document\Regular');
        $data = $regular->fetchAll();
        return ['data' => $data];
    }

    public function timecash()
    {
        return [];
    }

    public function git()
    {
        $git = Common\LoadClass::getDao('Document\\Git');
        $data = $git->fetchAll();
        return ['data' => $data];
    }

    public function markdown()
    {
        return [];
    }

    


}
