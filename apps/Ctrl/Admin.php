<?php
namespace Ctrl;
use ZPHP\Controller\IController;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use Common;

class Admin implements IController
{

    protected $params = NULL;
    
    
    public function _before()
    {
        $this->params = Request::getParams();
        return true;
    }

    public function _after()
    {
        //
    }

}

