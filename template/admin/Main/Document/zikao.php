<?php
use Common\Utils ;
?>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'zikao'; include(__DIR__.'/tablist.php');?>
     <br/>

       <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>知识指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
       <div class="panel panel-default">
            <div class="panel-heading">文档</div>
            <div class="panel-body">
                <a href="/public/document/zikao/jienengjishu/1704讲义.pdf" target="_blank">1704讲义</a>&nbsp;&nbsp;
            </div>
            <div class="panel-footer"></div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">英语</div>
            <div class="panel-body">
                <a href="/public/document/zikao/english/1704自考英语二高频词汇（打印版）.pdf" target="_blank">1704高频词汇</a>&nbsp;&nbsp;
            </div>
            <div class="panel-footer"></div>
            
        </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>