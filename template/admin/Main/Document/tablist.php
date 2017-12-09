<?php
use Common\Utils;
?>

<ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="<?php if($active=='php') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Document', 'php')?>">PHP</a></li>
        <li role="presentation" class="<?php if($active=='linux') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Document', 'linux')?>">LINUX</a></li>
        <li role="presentation" class="<?php if($active=='timecash') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Document', 'timecash')?>">TimeCash</a></li>
        <li role="presentation" class="<?php if($active=='regular') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Document', 'regular')?>">Regular</a></li>
        <li role="presentation" class="<?php if($active=='git') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Document', 'git')?>">GIT</a></li>
        <li role="presentation" class="<?php if($active=='svn') echo "active"; ?>"><a href="<?=Utils::makeUrl('Main/Document', 'svn')?>">SVN</a></li>
</ul>
