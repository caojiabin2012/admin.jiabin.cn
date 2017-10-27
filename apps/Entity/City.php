<?php
/**
 * Created by PhpStorm.
 * User: shenzhe
 * Date: 15-1-20
 * Time: 下午4:09
 */

namespace Entity;

class City
{
    const TABLE_NAME = 'jiabin_city';

    public $id;
    public $code;
    public $province_id;
}