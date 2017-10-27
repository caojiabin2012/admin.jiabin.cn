<?php
namespace Common;

use ZPHP\Core\Factory;

/**
 * 获取class实例的工具类
 *
 * @package service
 *
 */
class LoadClass
{

    /**
     * @param $service
     * @return \service\Base
     */
    public static function getService($service)
    {
        return Factory::getInstance("Service\\{$service}");
    }

    /**
     * @param $dao
     * @return \dao\Base
     */
    public static function getDao($dao)
    {
        return Factory::getInstance("Dao\\{$dao}");
    }

    /**
     * @param $lib
     * @return \Lib\Base
     */
    public static function getLib($lib)
    {
        return Factory::getInstance("Lib\\{$lib}");
    }
}
