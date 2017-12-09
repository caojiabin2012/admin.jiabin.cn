<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <style>
        .titcolor{ background-color:#f5f5f5;}
    </style>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'ftp'; include(__DIR__.'/tablist.php');?>
        

        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            FTP常用账号查询<br />
            <code>窍门：Ctrl+F 快速查找 FTP账号（为了方便查看,下面的2个标题都是可以收缩的哦）</code>
        </div>

        <div class="accordion">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo1">
                        生产环境</a>
                </div>
                <div id="demo1" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <th class="titcolor">
                                id
                            </th>
                            <th class="titcolor">
                                version
                            </th>
                            <th class="titcolor">
                                url
                            </th>
                            <th class="titcolor">
                                alias
                            </th>
                             <th class="titcolor">
                                username
                            </th>
                             <th class="titcolor">
                                password
                            </th>
                             <th class="titcolor">
                                route
                            </th>
                            <th class="titcolor">
                                remark
                            </th>
                            <th class="titcolor">
                                create_time
                            </th>
                            <th class="titcolor">
                                update_time
                            </th>
                        </tr>

                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 1){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$key+1?>
                                            </td>
                                            <td>
                                                <?=$value->version?>
                                            </td>
                                            <td>
                                                <?=$value->url?>
                                            </td>
                                            <td>
                                                <?=$value->alias?>
                                            </td>
                                             <td>
                                                <?=$value->username?>
                                            </td>
                                             <td>
                                                <?=$value->password?>
                                            </td>
                                             <td>
                                                <?=$value->route?>
                                            </td>
                                            <td>
                                                <?=$value->remark?>
                                            </td>
                                            <td>
                                                <?=$value->create_time?>
                                            </td>
                                            <td>
                                                <?=$value->update_time?>
                                            </td>
                                        </tr>
                                    <?php
                                    
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
             <div class="accordion-group">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo2">
                    测试环境
                </a>
                <div id="demo2" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <th class="titcolor">
                                id
                            </th>
                            <th class="titcolor">
                                version
                            </th>
                            <th class="titcolor">
                                url
                            </th>
                            <th class="titcolor">
                                alias
                            </th>
                             <th class="titcolor">
                                username
                            </th>
                             <th class="titcolor">
                                password
                            </th>
                             <th class="titcolor">
                                route
                            </th>
                            <th class="titcolor">
                                remark
                            </th>
                            <th class="titcolor">
                                create_time
                            </th>
                            <th class="titcolor">
                                update_time
                            </th>
                        </tr>

                        <?php
                            foreach ($data as $key => $value) {
                                if($value->type == 2){
                                    ?>
                                        <tr>
                                            <td>
                                                <?=$key+1?>
                                            </td>
                                            <td>
                                                <?=$value->version?>
                                            </td>
                                            <td>
                                                <?=$value->url?>
                                            </td>
                                            <td>
                                                <?=$value->alias?>
                                            </td>
                                             <td>
                                                <?=$value->username?>
                                            </td>
                                             <td>
                                                <?=$value->password?>
                                            </td>
                                             <td>
                                                <?=$value->route?>
                                            </td>
                                            <td>
                                                <?=$value->remark?>
                                            </td>
                                            <td>
                                                <?=$value->create_time?>
                                            </td>
                                            <td>
                                                <?=$value->update_time?>
                                            </td>
                                        </tr>
                                    <?php
                                    
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
        
    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>