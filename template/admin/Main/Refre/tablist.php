<?php
use Common\Utils;
?>
 <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="<?php if($active=='httpcode') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Refre', 'httpcode')?>">HTTP状态码</a></li>
        <li role="presentation" class="<?php if($active=='escapechar') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Refre', 'escapechar')?>">HTML特殊字符转义表</a></li>
        <li role="presentation" class="<?php if($active=='asciilist') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Refre', 'asciilist')?>">Ascii码对照表</a></li>
        <li role="presentation" class="<?php if($active=='portcode') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Refre', 'portcode')?>">HTTP/TCP/UDP端口</a></li>
        <li role="presentation" class="<?php if($active=='useragent') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Refre', 'useragent')?>">浏览器User-Agent</a></li>
        <li role="presentation" class="<?php if($active=='contenttype') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Refre', 'contenttype')?>">Content-Type文件扩展名</a></li>

        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">更多文档 <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li role="presentation"><a href="<?=Utils::makeUrl('Main/Refre', 'websafecolors')?>">WEB安全色对照表</a></li>
                <li role="presentation" class=""><a href="<?=Utils::makeUrl('Main/Refre', 'httprequest')?>">HTTP Request请求方法</a></li>
                <li role="presentation" class=""><a href="<?=Utils::makeUrl('Main/Refre', 'androidmanifest')?>">Android Manifest 权限描述</a></li>
            </ul>
        </li>
</ul>