<?php
use Common\Utils ;
?>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>

<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'timecash'; include(__DIR__.'/tablist.php');?>
     <br/>

       <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>TimeCash指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
       <div class="panel panel-default">
            <div class="panel-heading">手册</div>
            <div class="panel-body">
                <a href="/document/timecash/0315/start.html" target="_blank">后台手册</a>&nbsp;&nbsp;
            </div>
        </div>

    <div class="panel panel-default">
        <div class="panel-heading">流程</div>
        <div class="panel-body">
            <a href="/document/timecash/流程/登录.pdf" target="_blank">登录</a>&nbsp;&nbsp;
            <a href="/document/timecash/流程/注册授信.pdf" target="_blank">注册授信</a>&nbsp;&nbsp;
            <a href="/document/timecash/流程/借款.pdf" target="_blank">借款</a>&nbsp;&nbsp;
            <a href="/document/timecash/流程/到期扣款.pdf" target="_blank">到期扣款</a>&nbsp;&nbsp;
            <a href="/document/timecash/流程/主动还款.pdf" target="_blank">主动还款</a>&nbsp;&nbsp;
        </div>
    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
