<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <script src="/public/plug/jsonview/c.js" type="text/javascript"></script>
    <link href="/public/plug/jsonview/s.css" type="text/css" rel="stylesheet"></link>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'json'; include(__DIR__.'/tablist.php');?>

        <!-- Tab panes -->
        <div class="tab-content">
            <br/>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <strong>JSON格式化及高亮!</strong> 请将JSON代码复制至下面的编辑框中即可， 按F11进入全屏，按ESC退出全屏。
            </div>
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



    <!-- /container -->

<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
