<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">Mysql 连接测试</h4>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <label class="radio-inline">
                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="">PDO
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Mysqli
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">Mysql
                </label>
            </div>

            <div class="panel-body">
                <div class="input-group col-md-5">
                    <label for="exampleInputEmail1">Host</label>
                    <input type="text" class="form-control" id="host" value="172.16.75.129" placeholder="Enter Host" aria-describedby="basic-host">
                </div>
            </div>

            <div class="panel-body">
                <div class="input-group col-md-5">
                    <label for="exampleInputEmail1">Port</label>
                    <input type="text" class="form-control" id="port" value="3306" placeholder="Enter Port" aria-describedby="basic-port">
                </div>
            </div>

            <div class="panel-body">
                <div class="input-group col-md-5">
                    <label for="exampleInputEmail1">User</label>
                    <input type="text" class="form-control" id="user" value="root" aria-describedby="basic-user">
                </div>
            </div>

            <div class="panel-body">
                <div class="input-group col-md-5">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" id="pass" value="root" aria-describedby="basic-pass">
                </div>
            </div>

            <div class="panel-body">
                <div class="input-group col-md-5">
                    <label for="exampleInputEmail1">Database Name</label>
                    <input type="text" class="form-control" id="db" value="test" aria-describedby="basic-db">
                </div>
            </div>

            <div class="panel-body">
                <button type="button" class="btn btn-default" id="basic-submit">提交</button>
            </div>
        </div>

<script>
    $(function () {
        $('#basic-submit').click(function () {
            $.post("<?=Utils::makeUrl('Main/IP', 'getIP')?>", {aaaa:324}, function(data){
                console.log(data);
            });
        });

    })
</script>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>