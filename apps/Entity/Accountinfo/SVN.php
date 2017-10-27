<?php 
namespace Entity\Accountinfo;

class SVN
{
	const TABLE_NAME = 'jiabin_accountinfo_svn';

    public $id;
    public $version;
    public $url;
    public $alias;
    public $type;
    public $username;
    public $password;
    public $route;
    public $remark;
    public $create_time;
    public $update_time;
}