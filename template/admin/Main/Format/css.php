<?php
use Common\Utils ;
// var_dump($data);
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <link href="/public/plug/code-mirror/5.21.0/lib/codemirror.css" rel="stylesheet" type="text/css" />
    <link href="/public/plug/code-mirror/5.21.0/addon/display/fullscreen.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}
        .CodeMirror { height: auto; border: 1px solid #ddd; }
        .CodeMirror-scroll { max-height: 800px; }
        .CodeMirror pre { padding-left: 7px; line-height: 1.25; }
    </style>

    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/lib/codemirror.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/addon/edit/matchbrackets.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/addon/selection/active-line.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/addon/display/fullscreen.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/addon/comment/continuecomment.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/addon/comment/comment.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/mode/htmlmixed/htmlmixed.js"></script>
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/mode/clike/clike.js"></script>

   
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/mode/css/css.js"></script>
    

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'css'; include(__DIR__.'/tablist.php');?>


        <!-- Tab panes -->
        <div class="tab-content">
            <br/>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <strong>在线CSS高亮格式化!</strong> 请将CSS代码复制至下面的编辑框中即可， 按F11进入全屏，按ESC退出全屏。
            </div>

            <div role="tabpanel" class="tab-pane active">
	<textarea id="code" name="code" placeholder="请输入要转换的CSS代码">/* Some example CSS */

@import url("something.css");

body {
  margin: 0;
  padding: 3em 6em;
  font-family: tahoma, arial, sans-serif;
  color: #000;
}

#navigation a {
  font-weight: bold;
  text-decoration: none !important;
}</textarea>
                <hr/>
                <br/>
            </div>
        </div>


    </div>

    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            mode: "text/css",
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: true,
            continueComments: "Enter",
            //theme: "night",
            indentUnit: 4,
            indentWithTabs: true,
            extraKeys: {
                "F11": function(cm) {
                    cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                },
                "Esc": function(cm) {
                    if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                },
                "Ctrl-Y": "autocomplete",
                "Ctrl-Q": "toggleComment"
            }
        });
    </script>

    <!-- /container -->

<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
