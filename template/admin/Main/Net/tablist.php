<?php
use Common\Utils;
?>
<ul class="nav nav-tabs" role="tablist">
        <li role="interface" class="<?php if($active=='httpRequest') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Net', 'httpRequest')?>">Http请求</a></li>
        <li role="presentation" class="<?php if($active=='reurl') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Net', 'reurl')?>">定时刷新网址</a></li>
        <li role="presentation" class="<?php if($active=='client') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Net', 'client')?>">获取浏览器信息</a></li>
</ul>