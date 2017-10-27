<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'useragent'; include(__DIR__.'/tablist.php');?>
        


        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>常用浏览器User-Agent大全：提供PC浏览器user-agent，手机浏览器user-agent
        </div>

        <ul class="list-group">
            <li class="list-group-item"><div class="input-group" style="width: 100%">
                    <span class="input-group-addon" style="width:188px" id="basic-addon1">当前的UA</span>
                    <input type="text" class="form-control" onmouseover="javascript:this.select();" id='cua' value="">
                    <script>$("#cua").val('User-Agent,'+navigator.userAgent);</script>
                </div></li>
        </ul>

        <div class="panel panel-success">
            <ul class="list-group">
                <li class="list-group-item list-group-item-info" style="width: 100%">PC端 User-Agent</li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">IE 9.0</span><input type="text"
                                                                                                 class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">IE 8.0</span><input type="text"
                                                                                                 class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">IE 7.0</span><input type="text"
                                                                                                 class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">IE 6.0</span><input type="text"
                                                                                                 class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Firefox 4.0.1 – MAC</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv,2.0.1) Gecko/20100101 Firefox/4.0.1"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Firefox 4.0.1 – Windows</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (Windows NT 6.1; rv,2.0.1) Gecko/20100101 Firefox/4.0.1"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Opera 11.11 – MAC</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; en) Presto/2.8.131 Version/11.11"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Opera 11.11 – Windows</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Opera/9.80 (Windows NT 6.1; U; en) Presto/2.8.131 Version/11.11"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Chrome 17.0 – MAC</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_0) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px" id="Span1">safari 5.1 – MAC</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; en-us) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Safari/534.50"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px" id="Span2">safari 5.1 – Windows</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (Windows; U; Windows NT 6.1; en-us) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Safari/534.50"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">傲游（Maxthon）</span><input type="text"
                                                                                                      class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Maxthon 2.0)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">腾讯TT</span><input type="text"
                                                                                               class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; TencentTraveler 4.0)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">世界之窗（The World） 2.x</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">世界之窗（The World） 3.x</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; The World)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">搜狗浏览器 1.x</span><input type="text"
                                                                                                    class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0; SE 2.X MetaSr 1.0; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">360浏览器</span><input type="text"
                                                                                                 class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; 360SE)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Avant</span><input type="text"
                                                                                                class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Avant Browser)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Green Browser</span><input type="text"
                                                                                                        class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)"></div>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-info" style="width: 100%">移动设备端 User-Agent</li><li
                    class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">safari iOS 4.33 – iPhone</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">safari iOS 4.33 – iPod Touch</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">safari iOS 4.33 – iPad</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent,Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Android N1</span><input type="text"
                                                                                                     class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (Linux; U; Android 2.3.7; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Android QQ浏览器 For android</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, MQQBrowser/26 Mozilla/5.0 (Linux; U; Android 2.3.7; zh-cn; MB200 Build/GRJ22; CyanogenMod-7) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Android Opera Mobile</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Opera/9.80 (Android 2.3.4; Linux; Opera Mobi/build-1107180945; U; en-GB) Presto/2.8.149 Version/11.10"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Android Pad Moto Xoom</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (Linux; U; Android 3.0; en-us; Xoom Build/HRI39) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">BlackBerry</span><input type="text"
                                                                                                     class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">WebOS HP Touchpad</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (hp-tablet; Linux; hpwOS/3.0.0; U; en-US) AppleWebKit/534.6 (KHTML, like Gecko) wOSBrowser/233.70 Safari/534.6 TouchPad/1.0"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Nokia N97</span><input type="text"
                                                                                                    class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">Windows Phone Mango</span><input
                            type="text" class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; HTC; Titan)"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">UC无</span><input type="text"
                                                                                              class="form-control" onmouseover="javascript:this.select();" value="User-Agent, UCWEB7.0.2.37/28/999"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">UC标准</span><input type="text"
                                                                                               class="form-control" onmouseover="javascript:this.select();" value="User-Agent, NOKIA5700/ UCWEB7.0.2.37/28/999"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">UCOpenwave</span><input type="text"
                                                                                                     class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Openwave/ UCWEB7.0.2.37/28/999"></div>
                </li>
                <li class="list-group-item">
                    <div class="input-group" style="width: 100%">
                        <span class="input-group-addon" style="width: 188px">UC Opera</span><input type="text"
                                                                                                   class="form-control" onmouseover="javascript:this.select();" value="User-Agent, Mozilla/4.0 (compatible; MSIE 6.0; ) Opera/UCWEB7.0.2.37/28/999"></div>
                </li>
            </ul>
        </div>

    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>