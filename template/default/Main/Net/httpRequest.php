<?php
use Common\Utils ;
?>
<link href="/public/plug/jsonview/s.css" type="text/css" rel="stylesheet"></link>
<script src="/public/plug/jsonview/c.js" type="text/javascript"></script>

    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <script src="/public/plug/layer/3.0.3/layer/layer.js" type="text/javascript"></script>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>

        <?php $active = 'httpRequest'; include(__DIR__.'/tablist.php');?>
        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            接口调试
        </div>

        <div class="panel">
            <form id="form1" class="form-horizontal" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        访问地址：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="url" name="url" type="text" value="http://test23.api.timecash.cn/TCredit/VerifyLogin" placeholder="例如：http://www.baidu.com" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        超时时间(毫秒)：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="timeout" type="text" value="3000" style="width: 30%;" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        Content-Type：
                    </label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio"  value="form" checked  name="content_type">表单
                        </label>
                         <label class="radio-inline">
                            <input type="radio"  value="json"  name="content_type">json
                        </label>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-2 control-label">
                        提交内容：
                    </label> <div class="col-sm-10">
                        <textarea class="form-control" style="width: 100%;height: 200px;" id="request_data">authInfo=455962&orderId=4314813e-bd33-40ef-8592-8a825bdf60b4</textarea>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-2 control-label">
                    </label>
                    <div class="col-sm-10">
                        <input type="button" id="post" onclick="httpRequest('POST')" class="btn btn-danger" value="POST">
                        <input type="button" id="get" onclick="httpRequest('GET')" class="btn btn-primary" value="GET">
                    </div>

                </div>


            </form>
        </div>


        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            响应信息
        </div>
        <div class="HeadersRow">
            <textarea id="RawJson" class="form-control" rows="15" cols="200" style="width: 100%;" data-pure-clear-button></textarea>
        </div>
        <div class="panel-footer"></div>


        <div class="panel">
            <input type="Button" value="格式化" onclick="Process()" class="btn btn-primary" />
            <label for="TabSize">缩进量：</label>
            <select id="TabSize" onchange="TabSizeChanged()" class="">
              <option value="1">1</option>
              <option value="2" selected="true">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
            <input type="checkbox" id="QuoteKeys" onclick="QuoteKeysClicked()" checked="true" />
          <label for="QuoteKeys">引号</label>
          <a href="javascript:void(0);" onmousemove="SelectAllClicked()">全选</a>
          <span id="CollapsibleViewHolder" >
              <label for="CollapsibleView">
                <input type="checkbox" id="CollapsibleView" onclick="CollapsibleViewClicked()" checked="true" />
                显示控制
              </label>
          </span>
          <span id="CollapsibleViewDetail">
            <a href="javascript:void(0);" onclick="CollapseAllClicked()">叠起</a>
            <a href="javascript:void(0);" onclick="ExpandAllClicked()">展开</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(3)">2级</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(4)">3级</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(5)">4级</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(6)">5级</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(7)">6级</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(8)">7级</a>
            <a href="javascript:void(0);" onclick="CollapseLevel(9)">8级</a>
          </span>
        </div>

        <div id="Canvas" class=""></div>
        <script src="/public/plug/jsonview/urchin.js" type="text/javascript"></script>
        <script type="text/javascript" src="/public/plug/jsonview/m.js"></script>
    </div>
    <script>
      function httpRequest(method){
            var index = layer.load(1, {
               shade: [0.1,'#fff'] //0.1透明度的白色背景
            });
          $.post("<?=Utils::makeUrl('Main/Net', 'http')?>",{url:$('#url').val(), timeOut:$('#timeout').val(), method:method, 'fromData': $('#request_data').val(),contentType:$('input[name="content_type"]:checked ').val()},function(data){
            layer.close(index);
            data = JSON.stringify(data);
            $('#RawJson').val(data);
            Process();
          });
      }
    </script>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
