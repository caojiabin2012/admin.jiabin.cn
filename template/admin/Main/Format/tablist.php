<?php
use Common\Utils;
?>

<ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="<?php if($active=='json') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'json')?>">JSON</a></li>
        <li role="presentation" class="<?php if($active=='html') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'html')?>">HTML</a></li>
        <li role="presentation" class="<?php if($active=='css') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'css')?>">CSS</a></li>
        <li role="presentation" class="<?php if($active=='javascript') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'javascript')?>">JavaScript</a></li>
        <li role="presentation" class="<?php if($active=='php') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'php')?>">PHP</a></li>
        <li role="presentation" class="<?php if($active=='java') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'java')?>">JAVA</a></li>
        <li role="presentation" class="<?php if($active=='ruby') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'ruby')?>">Ruby</a></li>
        <li role="presentation" class="<?php if($active=='sql') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'sql')?>">SQL</a></li>
        <li role="presentation" class="<?php if($active=='xml') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'xml')?>">XML</a></li>
        <li role="presentation" class="<?php if($active=='http') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Format', 'http')?>">HTTP头</a></li>
</ul>