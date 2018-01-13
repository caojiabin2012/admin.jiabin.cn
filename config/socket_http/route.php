<?php
return [
        'route'=>[
            'static' => [                  //静态路由
                '/format/json' => [
                    'Main\\Format',        //ctrl类
                    'json'                 //具体执行的方法
                ],
                '/format/html' => [
                    'Main\\Format',
                    'html'
                ],
                '/format/css' => [
                    'Main\\Format',
                    'css'
                ],
                '/format/javascript' => [
                    'Main\\Format',
                    'javascript'
                ],
                '/format/php' => [
                    'Main\\Format',
                    'php'
                ],
                '/format/java' => [
                    'Main\\Format',
                    'java'
                ],
                '/format/ruby' => [
                    'Main\\Format',
                    'ruby'
                ],
                '/format/sql' => [
                    'Main\\Format',
                    'sql'
                ],
                '/format/xml' => [
                    'Main\\Format',
                    'xml'
                ],
                '/format/http' => [
                    'Main\\Format',
                    'http'
                ],
                '/format/unixtime' => [
                    'Main\\Format',
                    'unixtime'
                ],
                '/code/diff' => [
                    'Main\\Code',
                    'diff'
                ],
                '/code/translate' => [
                    'Main\\Code',
                    'translate'
                ],
                '/net/httpRequest' => [
                    'Main\\Net',
                    'httpRequest'
                ],
                '/net/reurl' => [
                    'Main\\Net',
                    'reurl'
                ],
                '/net/client' => [
                    'Main\\Net',
                    'client'
                ],
                '/refre/httpcode' => [
                    'Main\\Refre',
                    'httpcode'
                ],
                '/refre/escapechar' => [
                    'Main\\Refre',
                    'escapechar'
                ],
                '/refre/asciilist' => [
                    'Main\\Refre',
                    'asciilist'
                ],
                '/refre/portcode' => [
                    'Main\\Refre',
                    'portcode'
                ],
                '/refre/useragent' => [
                    'Main\\Refre',
                    'useragent'
                ],
                '/refre/contenttype' => [
                    'Main\\Refre',
                    'contenttype'
                ],
                '/refre/websafecolors' => [
                    'Main\\Refre',
                    'websafecolors'
                ],
                '/refre/httprequest' => [
                    'Main\\Refre',
                    'httprequest'
                ],
                '/refre/androidmanifest' => [
                    'Main\\Refre',
                    'androidmanifest'
                ],
                '/other/plan' => [
                    'Main\\Other',
                    'plan'
                ],
            ],
            'dynamic' => [                     //动态路由
                '/^\/(\d+]\/(.*?]$/iU' => [    //匹配 http://host/uid/token
                    'main\\main',                   //ctrl类
                    'main',                         //具体执行的方法
                    ['uid', 'token'],          //对应的参数名
                    '/{uid}/{token}'                //反向返回的格式, 通过内置的
                ],
            ],
            'cache'=>true,
        ],
    ];
