<?php
use Common\Utils ;
?>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'regular'; include(__DIR__.'/tablist.php');?>
    <br/>

       <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>Regular指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
        <div class="accordion">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo1">
                        手册说明
                    </a>
                </div>
                <div id="demo1" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th class="titcolor">
                                    pattern
                                </th>
                                <th class="titcolor">
                                    describe
                                </th>
                            </tr>
                        </tbody>
                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 1){
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
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo2">
                        具体实例
                    </a>
                </div>
                <div id="demo2" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th class="titcolor">
                                    pattern
                                </th>
                                <th class="titcolor">
                                    describe
                                </th>
                            </tr>
                        </tbody>
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
        </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
