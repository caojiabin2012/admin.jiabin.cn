<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>

        <?php $active = 'reurl'; include(__DIR__.'/tablist.php');?>

        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            在线定时刷新指定网址的工具（可以根据用户设定的时间频率定时刷新指定的网页）
        </div>

        <div class="panel">
            <form id="form1" class="form-horizontal" action="/reurl/" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        刷新网址：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="url" name="url" type="text" value="http://www.baidu.com" placeholder="例如：http://www.baidu.com" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        刷新频率(秒/次)：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="frequency" type="text" value="5" style="width: 30%;" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        已刷新次数：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="times" type="text" value="0" style="width: 30%;" disabled="" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        刷新网址：
                    </label>
                    <div class="col-sm-10">
                        <input type="button" id="startButton" onclick="startRefresh();" value="开始刷新" class="btn btn-success">
                        <input type="button" id="endButton" onclick="endRefresh();" value="停止刷新" class="btn btn-danger" style="display: none">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                    </label>
                    <div class="col-sm-10">
                        <div class="alert alert-danger alert-dismissible text-center" id="errdiv" role="alert" style="display: none;">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <iframe id="frame" style="width: 100%; height: 600px; padding: 10px; border: 1px solid #66be8c;"></iframe>
                    </div>
                </div>
            </form>
        </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            网页定时刷新器
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        1. 在线定时刷新指定网址的工具,定时刷新网页增加网页请求量,可在线测试网页压力,可自定义刷新时间<br/>
                        2. 此工具可能会给你的网站带来很大压力,使用请谨慎<br/>
                        3. 不要恶意操作刷新别的网站,文明使用本工具<br/>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>
        var run = false;
        var timer;
        var startButton;
        var endButton;

        $(document).ready(function () {
            startButton = $('#startButton');
            endButton = $('#endButton');
        });

        function refresh() {

            if (run) {
                var url = $('#url').val();
                var frame = $('#frame');
                frame.attr('src', url);
                var times = $('#times');
                times.val(parseInt(times.val()) + 1);

            }
        }

        function startRefresh() {
            run = true;
            try {
                startButton.hide();
                endButton.show();
                var frequency = parseInt($('#frequency').val());
                refresh();
                timer = setInterval("refresh()", frequency * 1000);
            } catch (Exception) {
                startButton.show();
                endButton.hide();
                showmsg('设置错误');
            }
        }

        function endRefresh() {
            run = false;
            clearInterval(timer);
            startButton.show();
            endButton.hide();
        }

        function showmsg(msg) {
            $('#errdiv').show();
            $('#errdiv').text(msg);
        }
    </script>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>