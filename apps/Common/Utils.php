<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 13-12-6
 * Time: 下午3:26
 */

namespace Common;

use ZPHP\Core\Config as ZConfig;

use ZPHP\Cache\Factory as ZCache;

use ZPHP\Common\Route as ZRoute;

use ZPHP\Conn\Factory as ZConn;

use ZPHP\Common\Utils as ZUtils;


class Utils
{

    public static function checkToken($uid, $token)
    {
        if(empty($uid) || empty($token)) {
            return false;
        }
        $config = ZConfig::getField('cache', 'net');
        $cacheHelper = ZCache::getInstance($config['adapter'], $config);
        $key = "{$uid}_t_" . ZConfig::getField('project', 'name');
        $realToken = $cacheHelper->get($key);
        return $realToken === $token;
    }

    public static function setToken($uid)
    {
        $token = uniqid();
        $config = ZConfig::getField('cache', 'net');
        $cacheHelper = ZCache::getInstance($config['adapter'], $config);
        $key = "{$uid}_t_" . ZConfig::getField('project', 'name');
        if ($cacheHelper->set($key, $token)) {
            return $token;
        }
        throw new \Exception("token set error", ERROR::TOKEN_ERROR);
    }

    public static function getViewMode()
    {
        if(Request::isLongServer()) {
            return ZConfig::getField('project', 'view_mode', 'Json');
        }
        if(\ZPHP\Common\Utils::isAjax()) {
            return 'Json';
        }
        return 'Php';
    }

    public static function jump($action, $method, $params)
    {
        $url = self::makeUrl($action, $method, $params);
        return array(
            '_view_mode'=>'Php',
            '_tpl_file'=>'jump.php',
            'url'=>$url,
            'static_url'=>ZConfig::getField('project', 'static_url'),
        );
    }

    public static function showMsg($msg)
    {
        return array(
            '_view_mode'=> self::getViewMode(),
            '_tpl_file'=>'error.php',
            'msg'=>$msg,
            'static_url'=>ZConfig::getField('project', 'static_url'),
        );
    }

    public static function makeUrl($action, $method, $params=array())
    {
        return ZRoute::makeUrl($action, $method, $params);
    }

    public static function online($channel='ALL')
    {
        $config = ZConfig::get('connection');
        $connection = ZConn::getInstance($config['adapter'], $config);
        return $connection->getChannel($channel);
    }


    public static function isJson($string)
    {
        $data = json_decode($string);

        return json_last_error()== JSON_ERROR_NONE;
    }
}
