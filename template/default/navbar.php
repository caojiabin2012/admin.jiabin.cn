<?php
use Common\Utils;
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">开发者俱乐部</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">格式化转换<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'json')?>">JSON</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'html')?>">HTML</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'css')?>">CSS</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'javascript')?>">JavaScript</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'php')?>" style="color: #F34925">PHP</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'java')?>">JAVA</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'ruby')?>">Ruby</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'sql')?>">SQL</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'xml')?>">XML</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'http')?>">HTTP头</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?=Utils::makeUrl('Main/Format', 'unixtime')?>" style="color: #F34925">Unix时间戳</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">文档参考<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=Utils::makeUrl('Main/Document', 'php')?>">PHP</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Document', 'linux')?>" >LINUX</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Document', 'timecash')?>">TimeCash</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Document', 'regular')?>">Regular</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Document', 'git')?>">GIT</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Document', 'svn')?>">SVN</a></li>
                    </ul>
                </li>

                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">网址处理<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=Utils::makeUrl('Main/Json', 'index')?>/url.html">网址批量打开工具</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Json', 'index')?>/url/parse.html">在线URL参数解析</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Json', 'index')?>/url/urlencode.html">在线URL编码器</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Json', 'index')?>/url/urldecode.html">在线URL解码器</a></li>
                    </ul>
                </li> -->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">代码处理  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=Utils::makeUrl('Main/Code', 'diff')?>" style="color: #F34925">文本/代码对比工具</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Code', 'translate')?>">在线文本转换拼音工具</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">网络工具<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://redis.jiabin.cn" target="_blank">Redis客户端</a></li>
                        <li><a href="http://mongo.jiabin.cn" target="_blank">Mongo客户端</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Net', 'httpRequest')?>">Http请求</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Net', 'reurl')?>">定时刷新网址</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Net', 'client')?>">获取浏览器信息</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Tools', 'linuxDash')?>">系统监控</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">对照表<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'useragent')?>">浏览器User-Agent</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'contenttype')?>">Content-Type文件扩展名</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'httpcode')?>" style="color: #F34925">HTTP状态码</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'escapechar')?>">HTML特殊字符转义表</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'httprequest')?>">HTTP Request请求方法</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'portcode')?>" style="color: #F34925">HTTP/TCP/UDP端口</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'asciilist')?>">Ascii码对照表</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'websafecolors')?>">WEB安全色对照表</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'androidmanifest')?>">Android Manifest 权限描述</a></li>
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">账号管理<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=Utils::makeUrl('Main/AccountInfo', 'ftp')?>">FTP</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/AccountInfo', 'db')?>">DB</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/AccountInfo', 'svn')?>" style="color: #F34925">SVN</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/AccountInfo', 'git')?>">GIT</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'asciilist')?>">待扩展一</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'websafecolors')?>">待扩展二</a></li>
                        <li><a href="<?=Utils::makeUrl('Main/Refre', 'androidmanifest')?>">待扩展三</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他工具<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=Utils::makeUrl('Main/Other', 'plan')?>" style="color: #F34925">在线任务防拖延</a></li>
                        <li><a href="https://im.dingtalk.com" target="_blank">钉钉网页版</a></li>
                        <li><a href="https://wx.qq.com/" target="_blank">微信网页版</a></li>
                        <li><a href="http://music.163.com/" target="_blank">网易云音乐</a></li>
                        <li><a href="http://fy.iciba.com/" target="_blank">在线翻译</a></li>
                        <li><a href="http://fm.xinli001.com/" target="_blank">心灵氧吧</a></li></li>
                    </ul>
                </li>

                <!--
            <ul class="nav navbar-nsav navbar-right">
                <li class="active">
                    <a href="./">Default</a>
                </li>
                <li>
                    <a href="../navbar-static-top/">Static top</a>
                </li>
                <li>
                    <a href="../navbar-fixed-top/">Fixed top</a>
                </li>
            </ul>
            -->
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>
