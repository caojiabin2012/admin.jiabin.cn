<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
	<title>jsdifflib demo</title>
	<link rel="stylesheet" type="text/css" href="/public/plug/diff/diffview.css"/>
	<script type="text/javascript" src="/public/plug/diff/diffview.js"></script>
	<script type="text/javascript" src="/public/plug/diff/difflib.js"></script>
<style type="text/css">
.body {
	font-size: 12px;
	font-family: Sans-Serif;
}
h2 {
	margin: 0.5em 0 0.1em;
	text-align: center;
}
.top {
	text-align: center;
}
.textInput {
	display: block;
	width: 49%;
	float: left;
}
textarea {
	width:100%;
	height:300px;
}
label:hover {
	text-decoration: underline;
	cursor: pointer;
}
.spacer {
	margin-left: 10px;
}
.viewType {
	font-size: 16px;
	clear: both;
	text-align: center;
	padding: 1em;
}
#diffoutput {
	width: 100%;
}
</style>

<script type="text/javascript">

function diffUsingJS(viewType) {
	"use strict";
	var byId = function (id) { return document.getElementById(id); },
		base = difflib.stringAsLines(byId("baseText").value),
		newtxt = difflib.stringAsLines(byId("newText").value),
		sm = new difflib.SequenceMatcher(base, newtxt),
		opcodes = sm.get_opcodes(),
		diffoutputdiv = byId("diffoutput"),
		contextSize = byId("contextSize").value;

	diffoutputdiv.innerHTML = "";
	contextSize = contextSize || null;

	diffoutputdiv.appendChild(diffview.buildView({
		baseTextLines: base,
		newTextLines: newtxt,
		opcodes: opcodes,
		baseTextName: "原内容",
		newTextName: "要比较的内容",
		contextSize: contextSize,
		viewType: viewType
	}));
}

</script>
</head>
<body>
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading">文本/代码对比工具</h4>
                    <div>在线文本/代码对比工具</div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form class="form-inline" role="form" method="post" target="_blank" action="/code/compare.html">
            	<div class="row">
            		<div class="col-md-6">
		                <div class="form-group">
		                    <div class="input-group">
								<textarea class="form-control" id="baseText" rows="15" cols="100" placeholder="原内容"></textarea>
		                    </div>
		                </div>
					</div>
					<div class="col-md-6">
		                <div class="form-group">
		                    <div class="input-group">
								<textarea class="form-control" id="newText" rows="15" cols="100" placeholder="要比较的内容"></textarea>
		                    </div>
		                </div>
					</div>
				</div>
				
				<br/>
				<p class="text-left">
	                <button type="button" onclick="diffUsingJS(0);" class="btn btn-primary">两侧显示</button>
	                <button type="button" onclick="diffUsingJS(1);" class="btn btn-primary">一行显示</button>
					<button type="reset" class="btn btn-danger">清空内容</button>
				</p>
				
            </form>				
        </div>

		<div class="panel-body">
        	<div class="">
				<input type="hidden" id="contextSize" value="" />
			</div>
			<div id="diffoutput"> </div>
		</div>
</div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>