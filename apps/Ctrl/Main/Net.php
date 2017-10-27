<?php
namespace Ctrl\Main;

use ZPHP\Controller\IController;

use ZPHP\Core\Config;

use ZPHP\Protocol\Request;

use Common\Utils;

use ZPHP\View;

use ZPHP\Client\Sync\Http as HttpClient;

class Net extends \Ctrl\Admin implements IController
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

    public function reurl()
    {
        return [];
    }

    public function client()
    {
        return [];
    }

    public function httpRequest()
    {
        return [];
    }

    public function http(){
        $params         = Request::getParams();
        $url            = $params['url'];
        $timeOut        = $params['timeOut'];
        $formData       = trim($params['fromData']);
        $method         = $params['method'];
        $contentType    = $params['contentType'];
        $header         = [];
        $requestData    = [];

        if ($contentType == 'json') {
            $requestData = $formData;
            $header = ['Content-Type: application/json'];
        } else {
            $_requestData = explode('&', $formData);
            foreach ($_requestData as $key => $value) {
                list($_key, $_val) = explode('=', $value);
                $requestData[$_key] = $_val;
            }
        }
        $responseData = HttpClient::getByUrl($url, null, $method, $requestData, $timeOut , $header, 0);
        if (Utils::isJson($responseData)) {
            $responseData = json_decode($responseData, true);
        }
        return ['_view_mode' => 'Json', 'url' => $url, 'method' => $method, 'content-Type' => $contentType, 'requestData' => $requestData, 'response_data' => $responseData];
    }
}

