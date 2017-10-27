<?php
use Common\Utils ;
?>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'php'; include(__DIR__.'/tablist.php');?>
     <br/>

       <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>PHP指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
       <div class="panel panel-default">
            <div class="panel-heading">官方手册</div>
            <iframe src="/document/php/zh/php-chunked-xhtml/index.html" style="width: 1140px;height: 1000px;border: 0px solid #ddd;"></iframe>
            <div class="panel-footer"></div>
        </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>