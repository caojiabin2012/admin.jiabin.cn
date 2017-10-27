<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">Unix时间戳TimeStamp转换工具-Unix时间戳转换为北京时间</h4>
                        <div>Unix时间戳TimeStamp转换工具</div>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    Unix时间戳(TimeStamp)转换工具（现在的时间戳是：<span id="currentunixtime" style="color: Red;"></span>）
                </div>


                <div id="collapseOne" class="in collapse bs-docs-example">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Unix时间戳→北京时间：
                                </label>
                                <div class="col-sm-8">
                                    <form name="unix2beijing" action="">
                                        <input type="text" name="timestamp" id="firstTimestamp" class="form-control" placeholder="请输入时间戳"><br />
                                        <input type="button" value="转换为北京时间 ↓" onclick="unix2human();" class="btn btn-success">
                                        <br />
                                        <br />
                                        <input name="result" type="text" class="form-control" placeholder="转换后的北京时间">
                                        <br />
                                        <hr />
                                    </form>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    北京时间 → Unix时间戳：
                                </label>
                                <div class="col-sm-8">
                                    <form name="beijing2unix" action="">
                                        北京时间
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>
                                                    <input name="year" type="text" class="form-control" style="width: 66px; text-align: center"
                                                           value="2015" maxlength="4">
                                                    年
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" style="width: 50px; text-align: center" name="month"
                                                           maxlength="2" value="8">
                                                    月
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" style="width: 50px; text-align: center" name="day"
                                                           maxlength="2" value="20">
                                                    日
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" style="width: 50px; text-align: center" name="hour"
                                                           maxlength="2" value="21">
                                                    时
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" style="width: 50px; text-align: center" name="minute"
                                                           maxlength="2" value="28">
                                                    分
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" style="width: 50px; text-align: center" name="second"
                                                           maxlength="2" value="15">
                                                    秒
                                                </td>
                                            </tr>
                                        </table>
                                        <input type="button" value="转换为Unix时间戳 ↓" class="btn btn-success" onclick="human2unix();">
                                        <br />
                                        <br />
                                        <input type="text" name="result" class="form-control">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="panel-footer">

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo1">
                        Unix时间戳TimeStamp转换工具</a>
                </div>
                <div id="demo1" class="in collapse bs-docs-demoexample">
                    <h4 style="color: #66be8c;">
                        什么是时间戳？</h4>
                    <br />
                    <h5>
                        1,Unix时间戳(Unix timestamp)，或称Unix时间(Unix time)、POSIX时间(POSIX time)，</h5>
                    <h5>
                        是一种时间表示方式，定义为从格林威治时间1970年01月01日00时00分00秒起至现在的总秒数。</h5>
                    <h5>
                        Unix时间戳不仅被使用在Unix系统、类Unix系统中，也在许多其他操作系统中被广泛采用。</h5>
                    <h5>
                        多数Unix系统将时间戳以一个32位整型进行保存，这可能会在2038年1月19日产生一些问题（Y2038问题）。</h5>
                    <br />
                    <br />
                    <h4 style="color: #4cae4c; font-weight: bold;">
                        如何在不同编程语言中 获取现在的Unix时间戳(Unix timestamp)？
                    </h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td width="20%">
                                Java
                            </td>
                            <td width="80%">
                                time
                            </td>
                        </tr>
                        <tr>
                            <td>
                                JavaScript
                            </td>
                            <td>
                                Math.round(new Date().getTime()/1000)<br>
                                <span>getTime()返回数值的单位是毫秒</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Microsoft .NET / C#
                            </td>
                            <td>
                                epoch = (DateTime.Now.ToUniversalTime().Ticks - 621355968000000000) / 10000000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                MySQL
                            </td>
                            <td>
                                SELECT unix_timestamp(now())
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Perl
                            </td>
                            <td>
                                time
                            </td>
                        </tr>
                        <tr>
                            <td>
                                PHP
                            </td>
                            <td>
                                time()
                            </td>
                        </tr>
                        <tr>
                            <td>
                                PostgreSQL
                            </td>
                            <td>
                                SELECT extract(epoch FROM now())
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Python
                            </td>
                            <td>
                                <span>先</span> import time <span>然后</span> time.time()
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ruby
                            </td>
                            <td>
                                <span>获取Unix时间戳：</span>Time.now <span>或</span> Time.new<br>
                                <span>显示Unix时间戳：</span>Time.now.to_i
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SQL Server
                            </td>
                            <td>
                                SELECT DATEDIFF(s, '1970-01-01 00:00:00', GETUTCDATE())
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Unix / Linux
                            </td>
                            <td>
                                date +%s
                            </td>
                        </tr>
                        <tr>
                            <td>
                                VBScript / ASP
                            </td>
                            <td>
                                DateDiff("s", "01/01/1970 00:00:00", Now())
                            </td>
                        </tr>
                        <tr>
                            <td>
                                其他操作系统<br>
                                <span style="font-weight: normal; font-size: 12px;">(如果Perl被安装在系统中)</span>
                            </td>
                            <td>
                                <span>命令行状态：</span>perl -e "print time"
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <h4 style="color: #4cae4c; font-weight: bold;">
                        如何在不同编程语言中 实现Unix时间戳(Unix timestamp) → 普通时间？</h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td width="20%">
                                Java
                            </td>
                            <td width="80%">
                                String date = new java.text.SimpleDateFormat("dd/MM/yyyy HH:mm:ss").format(new java.util.Date(<u>Unix
                                    timestamp</u> * 1000))
                            </td>
                        </tr>
                        <tr>
                            <td>
                                JavaScript
                            </td>
                            <td>
                                <span>先</span> var unixTimestamp = new Date(<u>Unix timestamp</u> * 1000) <span>然后</span>
                                commonTime = unixTimestamp.toLocaleString()
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Linux
                            </td>
                            <td>
                                date -d @<u>Unix timestamp</u>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                MySQL
                            </td>
                            <td>
                                from_unixtime(<u>Unix timestamp</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Perl
                            </td>
                            <td>
                                <span>先</span> my $time = <u>Unix timestamp</u> <span>然后</span> my ($sec, $min,
                                $hour, $day, $month, $year) = (localtime($time))[0,1,2,3,4,5,6]
                            </td>
                        </tr>
                        <tr>
                            <td>
                                PHP
                            </td>
                            <td>
                                date('r', <u>Unix timestamp</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                PostgreSQL
                            </td>
                            <td>
                                SELECT TIMESTAMP WITH TIME ZONE 'epoch' + <u>Unix timestamp</u>) * INTERVAL '1 second';
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Python
                            </td>
                            <td>
                                <span>先</span> import time <span>然后</span> time.gmtime(<u>Unix timestamp</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ruby
                            </td>
                            <td>
                                Time.at(<u>Unix timestamp</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SQL Server
                            </td>
                            <td>
                                DATEADD(s, <u>Unix timestamp</u>, '1970-01-01 00:00:00')
                            </td>
                        </tr>
                        <tr>
                            <td>
                                VBScript / ASP
                            </td>
                            <td>
                                DateAdd("s", <u>Unix timestamp</u>, "01/01/1970 00:00:00")
                            </td>
                        </tr>
                        <tr>
                            <td>
                                其他操作系统<br>
                                <span style="font-weight: normal; font-size: 12px;">(如果Perl被安装在系统中)</span>
                            </td>
                            <td>
                                <span>命令行状态：</span>perl -e "print scalar(localtime(<u>Unix timestamp</u>))"
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <h4 style="color: #4cae4c; font-weight: bold;">
                        如何在不同编程语言中 实现普通时间 → Unix时间戳(Unix timestamp)？
                    </h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td width="20%">
                                Java
                            </td>
                            <td width="80%">
                                long epoch = new java.text.SimpleDateFormat("<u>dd/MM/yyyy HH:mm:ss</u>").parse("01/01/1970
                                01:00:00");
                            </td>
                        </tr>
                        <tr>
                            <td>
                                JavaScript
                            </td>
                            <td>
                                var commonTime = new Date(Date.UTC(<u>year</u>, <u>month</u> - 1, <u>day</u>, <u>hour</u>,
                                <u>minute</u>, <u>second</u>))
                            </td>
                        </tr>
                        <tr>
                            <td>
                                MySQL
                            </td>
                            <td>
                                SELECT unix_timestamp(<u>time</u>)<br>
                                <span>时间格式: YYYY-MM-DD HH:MM:SS 或 YYMMDD 或 YYYYMMDD</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Perl
                            </td>
                            <td>
                                <span>先</span> use Time::Local <span>然后</span> my $time = timelocal($sec, $min,
                                $hour, $day, $month, $year);
                            </td>
                        </tr>
                        <tr>
                            <td>
                                PHP
                            </td>
                            <td>
                                mktime(<u>hour</u>, <u>minute</u>, <u>second</u>, <u>month</u>, <u>day</u>, <u>year</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                PostgreSQL
                            </td>
                            <td>
                                SELECT extract(epoch FROM date('<u>YYYY-MM-DD HH:MM:SS</u>'));
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Python
                            </td>
                            <td>
                                <span>先</span> import time <span>然后</span> int(time.mktime(time.strptime('<u>YYYY-MM-DD
                                    HH:MM:SS</u>', '%Y-%m-%d %H:%M:%S')))
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ruby
                            </td>
                            <td>
                                Time.local(<u>year</u>, <u>month</u>, <u>day</u>, <u>hour</u>, <u>minute</u>, <u>second</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SQL Server
                            </td>
                            <td>
                                SELECT DATEDIFF(s, '1970-01-01 00:00:00', <u>time</u>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Unix / Linux
                            </td>
                            <td>
                                date +%s -d"Jan 1, 1970 00:00:01"
                            </td>
                        </tr>
                        <tr>
                            <td>
                                VBScript / ASP
                            </td>
                            <td>
                                DateDiff("s", "01/01/1970 00:00:00", <u>time</u>)
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
        </div>

        <hr/>

    </div>
    </div>
    </div>

    <script type="text/javascript" src="/public/plug/unixtime/unixtime.js"></script>
    <script type="text/javascript">currentTime();</script>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
