<?php
use Common\Utils ;
var_dump($data);
?>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'git'; include(__DIR__.'/tablist.php');?>
    <br/>
    
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>Git指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
        <div class="accordion">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo1">
                        安装</a>
                </div>
                <div id="demo1" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 1){
                                    ?>
                                        <tr>
                                            <td>
                                                <a href="<?=$value->pattern?>" target="_blank"><?=$value->describe?></a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                        
                    </table>
                </div>
            </div>
            <br />
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo2">
                        创建新仓库
                    </a>
                </div>
                <div id="demo2" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 2){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                    
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo3">
                        检出仓库
                    </a>
                </div>
                
                <div id="demo3" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 3){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                    
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo4">
                        工作流
                    </a>
                </div>
                
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <strong></strong> 你的本地仓库由 git 维护的三棵“树”组成。第一个是你的 工作目录，它持有实际文件；第二个是 缓存区（Index），它像个缓存区域，临时保存你的改动；最后是 HEAD，指向你最近一次提交后的结果。
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo5">
                        添加与提交
                    </a>
                </div>
                
                <div id="demo5" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 4){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo6">
                        推送改动
                    </a>
                </div>
                
                <div id="demo6" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 6){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo7">
                        分支
                    </a>
                </div>
                
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    分支是用来将特性开发绝缘开来的。在你创建仓库的时候，master 是“默认的”。在其他分支上进行开发，完成后再将它们合并到主分支上。
                </div>
                <div id="demo7" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 7){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo8">
                        更新与合并
                    </a>
                </div>
                
                
                <div id="demo8" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 8){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo9">
                        标签
                    </a>
                </div>
                
                <div id="demo9" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 9){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo10">
                        替换本地改动
                    </a>
                </div>
                
                
                <div id="demo10" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 10){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo11">
                        有用的贴士
                    </a>
                </div>
                
                
                <div id="demo11" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 11){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$value->pattern?>
                                            </td>
                                            <td>
                                                <?=$value->describe?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <br />
        </div> 
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
