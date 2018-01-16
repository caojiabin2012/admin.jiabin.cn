<?php
namespace Dao;

class User extends Base 
{

    public function __construct()
    {
        parent::__construct('Entity\\User');
    }

}
