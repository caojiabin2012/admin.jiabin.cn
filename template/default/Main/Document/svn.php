<?php
use Common\Utils ;
?>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'svn'; include(__DIR__.'/tablist.php');?>
     <br/>

        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>SVN指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
       <div class="panel panel-default">
            <div class="panel-heading">文档</div>
            <div class="panel-body">
                <a href="/public/document/version control/svn/TortoiseSVN中文帮助手册.pdf" target="_blank">官方手册</a>&nbsp;&nbsp;
            </div>
        </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
