<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <style>
        .titcolor{ background-color:#f5f5f5;}
    </style>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'httprequest'; include(__DIR__.'/tablist.php');?>
        

        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            HTTP请求方法对照表— —HTTP Request Method共计15种
            <hr />
            <code>根据HTTP标准，HTTP请求可以使用多种请求方法。</code><br />
            <code>HTTP1.0定义了三种请求方法： GET, POST 和 HEAD方法。</code><br />
            <code>HTTP1.1新增了五种请求方法：OPTIONS, PUT, DELETE, TRACE 和 CONNECT 方法。</code>
        </div>

        <div class="panel panel-success">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="5%" class="titcolor">
                        序号
                    </th>
                    <th width="15%" class="titcolor">
                        方法
                    </th>
                    <th class="titcolor">
                        描述
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        GET
                    </td>
                    <td>
                        请求指定的页面信息，并返回实体主体。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        2
                    </td>
                    <td>
                        HEAD
                    </td>
                    <td>
                        类似于get请求，只不过返回的响应中没有具体的内容，用于获取报头
                    </td>
                </tr>
                <tr>
                    <td>
                        3
                    </td>
                    <td>
                        POST
                    </td>
                    <td>
                        向指定资源提交数据进行处理请求（例如提交表单或者上传文件）。数据被包含在请求体中。POST请求可能会导致新的资源的建立和/或已有资源的修改。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        4
                    </td>
                    <td>
                        PUT
                    </td>
                    <td>
                        从客户端向服务器传送的数据取代指定的文档的内容。
                    </td>
                </tr>
                <tr>
                    <td>
                        5
                    </td>
                    <td>
                        DELETE
                    </td>
                    <td>
                        请求服务器删除指定的页面。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        6
                    </td>
                    <td>
                        CONNECT
                    </td>
                    <td>
                        HTTP/1.1协议中预留给能够将连接改为管道方式的代理服务器。
                    </td>
                </tr>
                <tr>
                    <td>
                        7
                    </td>
                    <td>
                        OPTIONS
                    </td>
                    <td>
                        允许客户端查看服务器的性能。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        8
                    </td>
                    <td>
                        TRACE
                    </td>
                    <td>
                        回显服务器收到的请求，主要用于测试或诊断。
                    </td>
                </tr>
                <tr>
                    <td>
                        9
                    </td>
                    <td>
                        PATCH
                    </td>
                    <td>
                        实体中包含一个表，表中说明与该URI所表示的原内容的区别。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        10
                    </td>
                    <td>
                        MOVE
                    </td>
                    <td>
                        请求服务器将指定的页面移至另一个网络地址。
                    </td>
                </tr>
                <tr>
                    <td>
                        11
                    </td>
                    <td>
                        COPY
                    </td>
                    <td>
                        请求服务器将指定的页面拷贝至另一个网络地址。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        12
                    </td>
                    <td>
                        LINK
                    </td>
                    <td>
                        请求服务器建立链接关系。
                    </td>
                </tr>
                <tr>
                    <td>
                        13
                    </td>
                    <td>
                        UNLINK
                    </td>
                    <td>
                        断开链接关系。
                    </td>
                </tr>
                <tr class="titcolor">
                    <td>
                        14
                    </td>
                    <td>
                        WRAPPED
                    </td>
                    <td>
                        允许客户端发送经过封装的请求。
                    </td>
                </tr>
                <tr>
                    <td>
                        15
                    </td>
                    <td>
                        Extension-mothed
                    </td>
                    <td>
                        在不改动协议的前提下，可增加另外的方法。
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>