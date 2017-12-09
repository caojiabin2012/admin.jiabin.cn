<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <style>
        .titcolor{ background-color:#f5f5f5;}
    </style>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'db'; include(__DIR__.'/tablist.php');?>


        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            DB常用账号查询<br />
            <code>窍门：Ctrl+F 快速查找 DB账号（为了方便查看,下面的2个标题都是可以收缩的哦）</code>
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
                                db_host
                            </th>
                            <th class="titcolor">
                                db_user
                            </th>
                             <th class="titcolor">
                                db_password
                            </th>
                             <th class="titcolor">
                                db_port
                            </th>
                             <th class="titcolor">
                                ssh_host
                            </th>
                            <th class="titcolor">
                                ssh_user
                            </th>
                             <th class="titcolor">
                                ssh_password
                            </th>
                             <th class="titcolor">
                                ssh_port
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
                                                <?=$value->db_host?>
                                            </td>
                                            <td>
                                                <?=$value->db_user?>
                                            </td>
                                             <td>
                                                <?=$value->db_password?>
                                            </td>
                                             <td>
                                                <?=$value->db_port?>
                                            </td>
                                             <td>
                                                <?=$value->ssh_host?>
                                            </td>
                                            <td>
                                                <?=$value->ssh_user?>
                                            </td>
                                            <td>
                                                <?=$value->ssh_password?>
                                            </td>
                                            <td>
                                                <?=$value->ssh_port?>
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
                                db_host
                            </th>
                            <th class="titcolor">
                                db_user
                            </th>
                             <th class="titcolor">
                                db_password
                            </th>
                             <th class="titcolor">
                                db_port
                            </th>
                             <th class="titcolor">
                                ssh_host
                            </th>
                            <th class="titcolor">
                                ssh_user
                            </th>
                             <th class="titcolor">
                                ssh_password
                            </th>
                             <th class="titcolor">
                                ssh_port
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
                                                <?=$value->db_host?>
                                            </td>
                                            <td>
                                                <?=$value->db_user?>
                                            </td>
                                             <td>
                                                <?=$value->db_password?>
                                            </td>
                                             <td>
                                                <?=$value->db_port?>
                                            </td>
                                             <td>
                                                <?=$value->ssh_host?>
                                            </td>
                                            <td>
                                                <?=$value->ssh_user?>
                                            </td>
                                            <td>
                                                <?=$value->ssh_password?>
                                            </td>
                                            <td>
                                                <?=$value->ssh_port?>
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
