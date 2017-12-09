<?php
use Common\Utils ;
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
    <script type="text/javascript" src="/public/plug/code-mirror/5.21.0/mode/xml/xml.js"></script>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'xml'; include(__DIR__.'/tablist.php');?>
        <!-- Tab panes -->
        <div class="tab-content">
            <br/>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <strong>在线XMl高亮格式化!</strong> 请将Ruby代码复制至下面的编辑框中即可， 按F11进入全屏，按ESC退出全屏。
            </div>

            <div role="tabpanel" class="tab-pane active">
	<textarea id="code" name="code" placeholder="请输入要转换的Ruby代码"><?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0"
     xmlns:georss="http://www.georss.org/georss"
     xmlns:twitter="http://api.twitter.com">
  <channel>
    <title>Twitter / codemirror</title>
    <link>http://twitter.com/codemirror</link>
    <atom:link type="application/rss+xml"
               href="http://twitter.com/statuses/user_timeline/242283288.rss" rel="self"/>
    <description>Twitter updates from CodeMirror / codemirror.</description>
    <language>en-us</language>
    <ttl>40</ttl>
  <item>
    <title>codemirror: http://cloud-ide.com — they're springing up like mushrooms. This one
      uses CodeMirror as its editor.</title>
    <description>codemirror: http://cloud-ide.com — they're springing up like mushrooms. This
      one uses CodeMirror as its editor.</description>
    <pubDate>Thu, 17 Mar 2011 23:34:47 +0000</pubDate>
    <guid>http://twitter.com/codemirror/statuses/48527733722058752</guid>
    <link>http://twitter.com/codemirror/statuses/48527733722058752</link>
    <twitter:source>web</twitter:source>
    <twitter:place/>
  </item>
  <item>
    <title>codemirror: Posted a description of the CodeMirror 2 internals at
      http://codemirror.net/2/internals.html</title>
    <description>codemirror: Posted a description of the CodeMirror 2 internals at
      http://codemirror.net/2/internals.html</description>
    <pubDate>Wed, 02 Mar 2011 12:15:09 +0000</pubDate>
    <guid>http://twitter.com/codemirror/statuses/42920879788789760</guid>
    <link>http://twitter.com/codemirror/statuses/42920879788789760</link>
    <twitter:source>web</twitter:source>
    <twitter:place/>
  </item>
  </channel>
</rss>
    </textarea>
                <hr/>
                <br/>
            </div>
        </div>


    </div>

    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            mode: "xml",
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
