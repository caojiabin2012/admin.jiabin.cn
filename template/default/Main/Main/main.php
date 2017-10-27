<?php
use Common\Utils;
?>

<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
<?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
<!-- Main component for a primary marketing message or call to action -->

	<ol class="breadcrumb">
	  <li class="active"><span class="glyphicon glyphicon-home" aria-hidden="true"> 开发者工具在线导航</li>
	</ol>

	<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Hello World , 拥抱阳光，转身心晴。
    </div>

	<div class="panel panel-default">
		<div class="panel-heading"><b>格式化转化</b></div>
		<div class="panel-body">
			<a href="<?=Utils::makeUrl('Main/Format', 'json')?>" style="color: #F34925">JSON</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'html')?>">HTML</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'css')?>">CSS</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'javascript')?>">JavaScript</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'php')?>" style="color: #F34925">PHP</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'java')?>">JAVA</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'ruby')?>">Ruby</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'sql')?>">SQL</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'xml')?>">XML</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'http')?>">HTTP头</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Format', 'unixtime')?>" style="color: #F34925">Unix时间戳</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">文档参考</div>
		<div class="panel-body">
			<a href="/document/php/zh/php-chunked-xhtml/index.html" target="_blank">PHP</a>&nbsp;&nbsp;
			<a href="/document/timecash/0315/start.html#g=1&p=更新记录" target="_blank">TimeCash</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">网址处理</div>
		<div class="panel-body">
			<a href="<?=Utils::makeUrl('Main/Url', 'index')?>" style="color: #F34925">网址批量打开工具</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Code', '')?>/url/parse.html">在线URL参数解析</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Code', '')?>/url/urlencode.html">在线URL编码器</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Code', '')?>/url/urldecode.html">在线URL解码器</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">代码处理</div>
		<div class="panel-body">
			<a href="<?=Utils::makeUrl('Main/Code', 'diff')?>">文本/代码对比工具</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">网络工具</div>
		<div class="panel-body">
			<a href="redis.jiabin.cn" target="_blank">Redis</a>&nbsp;&nbsp;
			<a href="mongo.jiabin.cn" target="_blank">Mongo</a>&nbsp;&nbsp;
			<a href="127.0.0.1:10080" target="_blank">GitLab</a>&nbsp;&nbsp;
			<a href="http://jenkins.timecash.cn/" target="_blank">Jenkins</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Net', 'reurl')?>">定时刷新网址</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Net', 'client')?>">获取浏览器信息</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">对照表</div>
		<div class="panel-body">
			<a href="<?=Utils::makeUrl('Main/Refre', 'useragent')?>">浏览器User-Agent</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'contenttype')?>">Content-Type文件扩展名</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'httpcode')?>" style="color: #F34925">HTTP状态码</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'escapechar')?>">HTML特殊字符转义表</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'httprequest')?>">HTTP Request请求方法</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'portcode')?>" style="color: #F34925">HTTP/TCP/UDP端口</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'asciilist')?>">Ascii码对照表</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'websafecolors')?>">WEB安全色对照表</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/Refre', 'androidmanifest')?>">Android Manifest 权限描述</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">账号管理</div>
		<div class="panel-body">
			<a href="<?=Utils::makeUrl('Main/AccountInfo', 'ftp')?>">FTP</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/AccountInfo', 'db')?>">DB</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/AccountInfo', 'svn')?>">SVN</a>&nbsp;&nbsp;
			<a href="<?=Utils::makeUrl('Main/AccountInfo', 'git')?>">GIT</a>&nbsp;&nbsp;
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">其他工具</div>
		<div class="panel-body">
			<a href="<?=Utils::makeUrl('Main/Other', 'plan')?>">在线任务防拖延</a>&nbsp;&nbsp;
			<a href="http://music.163.com/" target="_blank">网易云音乐</a>&nbsp;&nbsp;
			<a href="http://fy.iciba.com/" target="_blank">金山翻译</a>&nbsp;&nbsp;
			<a href="http://fm.xinli001.com/" target="_blank">心灵氧吧</a></li>&nbsp;&nbsp;
		</div>
	</div>

</div>

<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
