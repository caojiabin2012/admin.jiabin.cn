<?php 
namespace Entity\Accountinfo;

class DB
{
	const TABLE_NAME = 'jiabin_accountinfo_db';

    public $id;
    public $version;
    public $type;
    public $db_host;
    public $db_user;
    public $db_password;
    public $db_port;
    public $ssh_host;
    public $ssh_user;
    public $ssh_password;
    public $ssh_port;
    public $create_time;
    public $update_time;
}