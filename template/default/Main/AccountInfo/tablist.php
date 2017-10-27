<?php
use Common\Utils;
?>
 <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="<?php if($active=='ftp') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/AccountInfo', 'ftp')?>">FTP</a></li>
        <li role="presentation" class="<?php if($active=='db') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/AccountInfo', 'db')?>">DB</a></li>
        <li role="presentation" class="<?php if($active=='svn') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/AccountInfo', 'svn')?>">SVN</a></li>
        <li role="presentation" class="<?php if($active=='git') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/AccountInfo', 'git')?>">GIT</a></li>

        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">更多文档 <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li role="presentation"><a href="<?=Utils::makeUrl('Main/Refre', 'websafecolors')?>">待扩展一</a></li>
                <li role="presentation" class=""><a href="<?=Utils::makeUrl('Main/Refre', 'httprequest')?>">待扩展二</a></li>
                <li role="presentation" class=""><a href="<?=Utils::makeUrl('Main/Refre', 'androidmanifest')?>">待扩展三</a></li>
            </ul>
        </li>
</ul>