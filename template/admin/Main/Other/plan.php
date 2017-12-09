<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <link href="/public/plug/plan/plan.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/public/plug/plan/plan.js"></script>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            明日复明日，明日何其多。<br/>
            我生待明日，万事成蹉跎。<br/>
            世人若被明日累，春去秋来老将至。<br/>
            朝看水东流，暮看日西坠。<br/>
            百年明日能几何？请君听我明日歌。<br/>
            明日复明日，明日何其多！<br/>
            日日待明日，万世成蹉跎。<br/>
            世人皆被明日累，明日无穷老将至。<br/>
            晨昏滚滚水东流，今古悠悠日西坠。<br/>
            百年明日能几何？请君听我明日歌。
        </div>


    <div class="panel">
        <div id="wrap">
            <div class="content">
                <div id="box">
                    <div id="add">
                        <input id="add-input" type="text" class="form-control" style="max-width: 98%;" placeholder="添加任务（按回车键确认Enter）">
                    </div>
                    <div id="list" class="list-group"></div>
                </div>
            </div>
        </div>
    </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            在线任务管理工具防拖延
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        1,帮助你合理有效的利用时间,统计每天所干的任务,让工作过程看得见。<br/>
                        2,采用浏览器本地存储 功能实现，请大胆刷新页面，信息不会丢失！（兼容绝大部分现代浏览器）<br/>
                        3,今日事今日毕，干掉拖延的坏毛病。
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
