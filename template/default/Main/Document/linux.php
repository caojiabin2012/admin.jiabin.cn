<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'linux'; include(__DIR__.'/tablist.php');?>
     <br/>

       <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>LINUX指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>

       <div class="panel panel-default">
            <div class="panel-heading">基础</div>
            <div class="panel-body">
                <a href="/document/linux/basics/Linux_101_Hacks_CN.pdf" target="_blank">Hacks</a>&nbsp;&nbsp;
                <a href="/document/linux/basics/Linux运维之道.pdf" target="_blank">运维之道</a>&nbsp;&nbsp;
                <a href="/document/linux/basics/Linux.文件系统精通指南.pdf" target="_blank">文件系统</a>&nbsp;&nbsp;
                <a href="/document/linux/basics/linux 特别注意的目录.jpeg" target="_blank">特别注意的目录</a>&nbsp;&nbsp;
                <a href="/document/linux/basics/linux 目录图解.png" target="_blank">目录图解</a>&nbsp;&nbsp;
                <a href="/document/linux/basics/Linux Security Coaching.png" target="_blank">学习路线</a>&nbsp;&nbsp;
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">SED & AWK</div>
            <div class="panel-body">
                <a href="/document/linux/sed_awk/AWK 教程 - v1.0.pdf" target="_blank">AWK</a>&nbsp;&nbsp;
                <a href="/document/linux/sed_awk/Sed手册.pdf" target="_blank">SED</a>&nbsp;&nbsp;
                <a href="/document/linux/sed_awk/Sed and Awk 101 Hacks -中文版.pdf" target="_blank">Sed and Awk 101 Hacks</a>&nbsp;&nbsp;
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">内核</div>
            <div class="panel-body">
                <a href="/document/linux/core/深入理解Linux内核(完整版)中文版.pdf" target="_blank">深入理解Linux内核</a>&nbsp;&nbsp;
            </div>
        </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
