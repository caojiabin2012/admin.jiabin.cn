<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\View;
use Common;
use PHPMailer\PHPMailer\PHPMailer;

class AccountInfo extends \Ctrl\Admin implements IController
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

    public function ftp()
    {
        $user = Common\LoadClass::getDao('Accountinfo\\FTP');
        $data = $user->fetchAll();
        return ['data' => $data];
        
        $view = View\Factory::getInstance('AccountinfoPhp');
        $view->setTpl('/main/accountinfo/ftp.php');
        $view->setModel(['data' => $data]);
        $view->display();
    }

    public function db()
    {
        $user = Common\LoadClass::getDao('Accountinfo\\DB');
        $data = $user->fetchAll();
        return ['data' => $data];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/accountinfo/db.php');
        $view->setModel(['data' => $data]);
        $view->display();
    }

    public function svn()
    {
        $user = Common\LoadClass::getDao('Accountinfo\\SVN');
        $data = $user->fetchAll();
        return ['data' => $data];

        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/accountinfo/svn.php');
        $view->setModel(['data' => $data]);
        $view->display();
    }

    public function git()
    {
        /**
        // 新建一个Dom实例
        $html = new simple_html_dom();
 
        // 从url中加载
        $html->load_file('http://www.stats.gov.cn/tjsj/tjbz/xzqhdm/201703/t20170310_1471429.html');
        $main = $html->find('p[class=MsoNormal]');
        $province = Common\LoadClass::getDao('Province');
        $city = Common\LoadClass::getDao('City');
        $id = 0;
        foreach ($main as $key => $value) {
            # code...
            
            if($value->find('b')){
                $_code = str_replace('&nbsp;', '', ltrim(trim(strip_tags($value->find('span', 0)->innertext()))));
                $_val = ltrim(trim(strip_tags($value->find('span', 2)->innertext())));
                // $a = ['code' => trim($_code), 'province' => $_val];
                $a = new \stdClass;
                $a->code = $_code;
                $a->province = $_val;
                // var_dump($a);die;
                $id = $province->add($a);
                echo 'if'.$_code."--".$_val."----".$id."<br/>";
            }else{
                $_code = str_replace('&nbsp;', '', ltrim(trim(strip_tags($value->find('span', 1)->innertext()))));
                $_val = str_replace('　', '', ltrim(trim(strip_tags($value->find('span', 3)))));
                $c = new \stdClass;
                $c->code = $_code;
                $c->city = $_val;
                $c->province_id = $id;
                 $city->add($c);
                echo 'else'.$_code."--".$_val."----".$id."<br/>";
            }
        }
        // $val = $main->find()
        // var_dump($main);

        die;
        $string = file_get_contents('http://www.stats.gov.cn/tjsj/tjbz/xzqhdm/201703/t20170310_1471429.html');
        echo $string;die;
        */
        $user = Common\LoadClass::getDao('Accountinfo\\GIT');
        $data = $user->fetchAll();
        return ['data' => $data];
        
        $view = View\Factory::getInstance('Php');
        $view->setTpl('/main/accountinfo/git.php');
        $view->setModel(['data' => $data]);
        $view->display();
    }


}

