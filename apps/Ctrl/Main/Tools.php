<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use ZPHP\View;

use Common;

class Tools extends \Ctrl\Admin implements IController
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

    public function show()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/tools/show.php');
        $view->setModel(['abc' => 'aaa', 'b' => [1,2,4,5]]);
        $view->display();
    }

    public function linuxDash()
    {
        return [];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/tools/linusDash.php');
        $view->display();
    }

    public function linuxDashServer()
    {

       // header("Cache-Control: no-store, no-cache, must-revalidate");
        //header("Pragma: no-cache");

        $modules_dir = \ZPHP\ZPHP::getRootPath().'/webroot/public/plug/linux-dash/app/shell_files/';
        $module = escapeshellcmd(Request::getParams()['module']);
        $data = shell_exec( $modules_dir . $module . '.sh' );
        return array_merge(json_decode($data, true), ['_view_mode' => 'Json']);
    }

}
