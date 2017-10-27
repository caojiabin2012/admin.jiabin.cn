<?php
return array(
        'server_mode' => (PHP_SAPI === 'cli') ? 'Cli' : 'Http',
        'app_path'=>'Apps',
        'ctrl_path'=>'Ctrl',
        'webroot'   => ROOT_PATH . '/webroot/',
        'project'=>array(
          'name'=>'Admin',
          'view_mode'=>'String',
        	'app_host'=>'admin.jiabin.cn',
        	'ctrl_name'=>'a',
        	'method_name'=>'m'
        )
    );


   // return array(
   //      'server_mode' => (PHP_SAPI === 'cli') ? 'Cli' : 'Http',
   //      'app_path'=>'apps',
   //      'ctrl_path'=>'Ctrl',
   //      'project'=>array(
   //          'name'=>'zphp',                 //项目名称。(会做为前缀，隔离不同的项目)
   //          'view_mode'=>'String',          //view模式
   //          'ctrl_name'=>'a',               //ctrl参数名
   //          'method_name'=>'m',             //method参数名    http://host/?{action_name}=main\main&{method_name}=main
   //      )
   //  );