<?php
namespace Dao\Accountinfo;

use Dao\Base;

class DB extends Base 
{

    public function __construct()
    {
        parent::__construct('Entity\\Accountinfo\\DB');
    }

}