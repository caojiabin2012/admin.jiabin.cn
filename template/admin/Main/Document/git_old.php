<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
<script type="text/javascript" charset="utf-8" src="/share/plug/ueditor-1.4.3.3/ueditor.parse.js"></script>

<div class="container">
    <!-- Static navbar -->
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <?php $active = 'git'; include(__DIR__.'/tablist.php');?>

     <br/>
    <div class="tab-content">
        <div class="panel panel-default">
        <div class="panel-heading">
            <div class="media">
                <div class="media-body">
                    <h3 style="text-align:center;"><b>Git命令大全及详解</b></h3>
                    <hr/>
                    <div style="margin-left: 10px; margin-right: 10px; float: right; color: #999;">
                        <span class="badge">git命令大全</span>
                        <span class="badge">git命令详解</span>
                        <span class="badge">git命令清单</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="jumbotron1" id="content"><p><br/></p>
                <p style="text-align: center;"><img class=" img-rounded"
                                                    src="/share/upload/image/20161213/1481634239711974.png" width="800"
                                                    height="200" title="" alt=""/><br/></p>
                <p><br/></p>
                <p><br/></p>
                <table align="center">
                    <caption><strong>Git命令清单</strong><br/></caption>
                    <tbody>
                    <tr class="firstRow">
                        <td width="149" valign="middle"
                            style="word-break: break-all; background-color: rgb(187, 187, 187);" align="center">命令
                        </td>
                        <td width="682" valign="middle"
                            style="word-break: break-all; background-color: rgb(187, 187, 187);" align="center">说明
                        </td>
                        <td width="399" valign="middle"
                            style="word-break: break-all; background-color: rgb(187, 187, 187);" align="center">备注
                        </td>
                    </tr>
                    <tr>
                        <td width="149" valign="top"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);"><strong>add</strong>
                        </td>
                        <td width="682" valign="top" style="word-break: break-all;">Add file contents to the index</td>
                        <td width="399" valign="top" style="word-break: break-all;"><br/></td>
                    </tr>
                    <tr>
                        <td width="149" valign="top"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);"><strong>bisect &nbsp;
                                &nbsp;&nbsp;</strong></td>
                        <td width="682" valign="top" style="word-break: break-all;">Find by binary search the change
                            that introduced a bug
                        </td>
                        <td width="399" valign="top" style="word-break: break-all;"><br/></td>
                    </tr>
                    <tr>
                        <td width="149" valign="top"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);"><strong>checkout &nbsp;&nbsp;</strong>
                        </td>
                        <td width="682" valign="top" style="word-break: break-all;">Checkout a branch or paths to the
                            working tree
                        </td>
                        <td width="399" valign="top"><br/></td>
                    </tr>
                    <tr>
                        <td width="149" valign="top"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);"><strong>clone &nbsp;
                                &nbsp; &nbsp;</strong></td>
                        <td width="682" valign="top" style="word-break: break-all;">Clone a repository into a new
                            directory
                        </td>
                        <td width="399" valign="top"><br/></td>
                    </tr>
                    <tr>
                        <td width="149" valign="top"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);"><strong>commit &nbsp;
                                &nbsp;&nbsp;</strong></td>
                        <td width="682" valign="top" style="word-break: break-all;">Record changes to the repository
                        </td>
                        <td width="399" valign="top"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>diff
                                &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Show changes
                            between commits, commit and working tree, etc
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>fetch
                                &nbsp; &nbsp; &nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Download
                            objects and refs from another repository
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>grep
                                &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Print lines
                            matching a pattern
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>init
                                &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Create an
                            empty Git repository or reinitialize an existing one
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td width="149" valign="top"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);"><strong>log &nbsp;
                                &nbsp; &nbsp; &nbsp;</strong></td>
                        <td width="682" valign="top" style="word-break: break-all;">Show commit logs</td>
                        <td width="399" valign="top"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>merge
                                &nbsp; &nbsp; &nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Join two or
                            more development histories together
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><p><strong>mv</strong>
                            </p></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">&nbsp;Move or
                            rename a file, a directory, or a symlink
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>pull
                                &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Fetch from
                            and merge with another repository or a local branch
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>push
                                &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Update remote
                            refs along with associated objects
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>rebase
                                &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Forward-port
                            local commits to the updated upstream head
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>reset
                                &nbsp; &nbsp; &nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Reset current
                            HEAD to the specified state
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>rm
                                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Remove files
                            from the working tree and from the index
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>show
                                &nbsp; &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Show various
                            types of objects
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>status
                                &nbsp; &nbsp;&nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Show the
                            working tree status
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="word-break: break-all; background-color: rgb(238, 236, 225);" width="149"><strong>tag
                                &nbsp; &nbsp; &nbsp; &nbsp;</strong></td>
                        <td valign="top" colspan="1" rowspan="1" style="word-break: break-all;" width="96">Create, list,
                            delete or verify a tag object signed with GPG
                        </td>
                        <td valign="top" colspan="1" rowspan="1"><br/></td>
                    </tr>
                    </tbody>
                </table>
                <p><br/></p>
                <p><br/></p>
                <p><br/></p>
                <table align="center">
                    <tbody>
                    <tr class="firstRow">
                        <td valign="top" colspan="1" rowspan="1"
                            style="border-width: 1px; border-style: solid; border-left-color: rgb(221, 221, 221); border-top-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(238, 236, 225);"
                            width="325"><h1>专用名词</h1></td>
                        <td valign="top" colspan="1" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="771"><p
                                style="margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: normal;">
                                Workspace：工作区&nbsp;</p>
                            <p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: normal;">Index /
                                Stage：暂存区&nbsp;</p>
                            <p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: normal;">
                                Repository：仓库区（或本地仓库）&nbsp;</p>
                            <p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; white-space: normal;">
                                Remote：远程仓库</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1" width="456"
                            style="word-break: break-all; border-width: 1px; border-style: solid;"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <h1>一、新建代码库</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 在当前目录新建一个Git代码库</p>
                            <p>$ git init</p>
                            <p><br/></p>
                            <p># 新建一个目录，将其初始化为Git代码库</p>
                            <p>$ git init [project-name]</p>
                            <p><br/></p>
                            <p># 下载一个项目和它的整个代码历史</p>
                            <p>$ git clone [url]</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>二、配置</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p>Git的设置文件为<span
                                    style="border: 1px solid rgb(0, 0, 0); color: rgb(247, 150, 70);">.gitconfig</span>，它可以在用户主目录下（全局配置），也可以在项目目录下（项目配置）。
                            </p>
                            <p><br/></p>
                            <p># 在当前目录新建一个Git代码库</p>
                            <p>$ git init</p>
                            <p><br/></p>
                            <p># 新建一个目录，将其初始化为Git代码库</p>
                            <p>$ git init [project-name]</p>
                            <p><br/></p>
                            <p># 下载一个项目和它的整个代码历史</p>
                            <p>$ git clone [url]</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>三、增加/删除文件</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 添加指定文件到暂存区</p>
                            <p>$ git add [file1] [file2] ...</p>
                            <p><br/></p>
                            <p># 添加指定目录到暂存区，包括子目录</p>
                            <p>$ git add [dir]</p>
                            <p><br/></p>
                            <p># 添加当前目录的所有文件到暂存区</p>
                            <p>$ git add .</p>
                            <p><br/></p>
                            <p># 添加每个变化前，都会要求确认</p>
                            <p># 对于同一个文件的多处变化，可以实现分次提交</p>
                            <p>$ git add -p</p>
                            <p><br/></p>
                            <p># 删除工作区文件，并且将这次删除放入暂存区</p>
                            <p>$ git rm [file1] [file2] ...</p>
                            <p><br/></p>
                            <p># 停止追踪指定文件，但该文件会保留在工作区</p>
                            <p>$ git rm --cached [file]</p>
                            <p><br/></p>
                            <p># 改名文件，并且将这个改名放入暂存区</p>
                            <p>$ git mv [file-original] [file-renamed]</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>四、代码提交</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 提交暂存区到仓库区</p>
                            <p>$ git commit -m [message]</p>
                            <p><br/></p>
                            <p># 提交暂存区的指定文件到仓库区</p>
                            <p>$ git commit [file1] [file2] ... -m [message]</p>
                            <p><br/></p>
                            <p># 提交工作区自上次commit之后的变化，直接到仓库区</p>
                            <p>$ git commit -a</p>
                            <p><br/></p>
                            <p># 提交时显示所有diff信息</p>
                            <p>$ git commit -v</p>
                            <p><br/></p>
                            <p># 使用一次新的commit，替代上一次提交</p>
                            <p># 如果代码没有任何新变化，则用来改写上一次commit的提交信息</p>
                            <p>$ git commit --amend -m [message]</p>
                            <p><br/></p>
                            <p># 重做上一次commit，并包括指定文件的新变化</p>
                            <p>$ git commit --amend [file1] [file2] ...</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1><strong>五、分支</strong></h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 列出所有本地分支</p>
                            <p>$ git branch</p>
                            <p><br/></p>
                            <p># 列出所有远程分支</p>
                            <p>$ git branch -r</p>
                            <p><br/></p>
                            <p># 列出所有本地分支和远程分支</p>
                            <p>$ git branch -a</p>
                            <p><br/></p>
                            <p># 新建一个分支，但依然停留在当前分支</p>
                            <p>$ git branch [branch-name]</p>
                            <p><br/></p>
                            <p># 新建一个分支，并切换到该分支</p>
                            <p>$ git checkout -b [branch]</p>
                            <p><br/></p>
                            <p># 新建一个分支，指向指定commit</p>
                            <p>$ git branch [branch] [commit]</p>
                            <p><br/></p>
                            <p># 新建一个分支，与指定的远程分支建立追踪关系</p>
                            <p>$ git branch --track [branch] [remote-branch]</p>
                            <p><br/></p>
                            <p># 切换到指定分支，并更新工作区</p>
                            <p>$ git checkout [branch-name]</p>
                            <p><br/></p>
                            <p># 切换到上一个分支</p>
                            <p>$ git checkout -</p>
                            <p><br/></p>
                            <p># 建立追踪关系，在现有分支与指定的远程分支之间</p>
                            <p>$ git branch --set-upstream [branch] [remote-branch]</p>
                            <p><br/></p>
                            <p># 合并指定分支到当前分支</p>
                            <p>$ git merge [branch]</p>
                            <p><br/></p>
                            <p># 选择一个commit，合并进当前分支</p>
                            <p>$ git cherry-pick [commit]</p>
                            <p><br/></p>
                            <p># 删除分支</p>
                            <p>$ git branch -d [branch-name]</p>
                            <p><br/></p>
                            <p># 删除远程分支</p>
                            <p>$ git push origin --delete [branch-name]</p>
                            <p>$ git branch -dr [remote/branch]</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>六、标签</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 列出所有tag</p>
                            <p>$ git tag</p>
                            <p><br/></p>
                            <p># 新建一个tag在当前commit</p>
                            <p>$ git tag [tag]</p>
                            <p><br/></p>
                            <p># 新建一个tag在指定commit</p>
                            <p>$ git tag [tag] [commit]</p>
                            <p><br/></p>
                            <p># 删除本地tag</p>
                            <p>$ git tag -d [tag]</p>
                            <p><br/></p>
                            <p># 删除远程tag</p>
                            <p>$ git push origin :refs/tags/[tagName]</p>
                            <p><br/></p>
                            <p># 查看tag信息</p>
                            <p>$ git show [tag]</p>
                            <p><br/></p>
                            <p># 提交指定tag</p>
                            <p>$ git push [remote] [tag]</p>
                            <p><br/></p>
                            <p># 提交所有tag</p>
                            <p>$ git push [remote] --tags</p>
                            <p><br/></p>
                            <p># 新建一个分支，指向某个tag</p>
                            <p>$ git checkout -b [branch] [tag]</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>七、查看信息</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 显示有变更的文件</p>
                            <p>$ git status</p>
                            <p><br/></p>
                            <p># 显示当前分支的版本历史</p>
                            <p>$ git log</p>
                            <p><br/></p>
                            <p># 显示commit历史，以及每次commit发生变更的文件</p>
                            <p>$ git log --stat</p>
                            <p><br/></p>
                            <p># 搜索提交历史，根据关键词</p>
                            <p>$ git log -S [keyword]</p>
                            <p><br/></p>
                            <p># 显示某个commit之后的所有变动，每个commit占据一行</p>
                            <p>$ git log [tag] HEAD --pretty=format:%s</p>
                            <p><br/></p>
                            <p># 显示某个commit之后的所有变动，其&quot;提交说明&quot;必须符合搜索条件</p>
                            <p>$ git log [tag] HEAD --grep feature</p>
                            <p><br/></p>
                            <p># 显示某个文件的版本历史，包括文件改名</p>
                            <p>$ git log --follow [file]</p>
                            <p>$ git whatchanged [file]</p>
                            <p><br/></p>
                            <p># 显示指定文件相关的每一次diff</p>
                            <p>$ git log -p [file]</p>
                            <p><br/></p>
                            <p># 显示过去5次提交</p>
                            <p>$ git log -5 --pretty --oneline</p>
                            <p><br/></p>
                            <p># 显示所有提交过的用户，按提交次数排序</p>
                            <p>$ git shortlog -sn</p>
                            <p><br/></p>
                            <p># 显示指定文件是什么人在什么时间修改过</p>
                            <p>$ git blame [file]</p>
                            <p><br/></p>
                            <p># 显示暂存区和工作区的差异</p>
                            <p>$ git diff</p>
                            <p><br/></p>
                            <p># 显示暂存区和上一个commit的差异</p>
                            <p>$ git diff --cached [file]</p>
                            <p><br/></p>
                            <p># 显示工作区与当前分支最新commit之间的差异</p>
                            <p>$ git diff HEAD</p>
                            <p><br/></p>
                            <p># 显示两次提交之间的差异</p>
                            <p>$ git diff [first-branch]...[second-branch]</p>
                            <p><br/></p>
                            <p># 显示今天你写了多少行代码</p>
                            <p>$ git diff --shortstat &quot;@{0 day ago}&quot;</p>
                            <p><br/></p>
                            <p># 显示某次提交的元数据和内容变化</p>
                            <p>$ git show [commit]</p>
                            <p><br/></p>
                            <p># 显示某次提交发生变化的文件</p>
                            <p>$ git show --name-only [commit]</p>
                            <p><br/></p>
                            <p># 显示某次提交时，某个文件的内容</p>
                            <p>$ git show [commit]:[filename]</p>
                            <p><br/></p>
                            <p># 显示当前分支的最近几次提交</p>
                            <p>$ git reflog</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>八、远程同步</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 下载远程仓库的所有变动</p>
                            <p>$ git fetch [remote]</p>
                            <p><br/></p>
                            <p># 显示所有远程仓库</p>
                            <p>$ git remote -v</p>
                            <p><br/></p>
                            <p># 显示某个远程仓库的信息</p>
                            <p>$ git remote show [remote]</p>
                            <p><br/></p>
                            <p># 增加一个新的远程仓库，并命名</p>
                            <p>$ git remote add [shortname] [url]</p>
                            <p><br/></p>
                            <p># 取回远程仓库的变化，并与本地分支合并</p>
                            <p>$ git pull [remote] [branch]</p>
                            <p><br/></p>
                            <p># 上传本地指定分支到远程仓库</p>
                            <p>$ git push [remote] [branch]</p>
                            <p><br/></p>
                            <p># 强行推送当前分支到远程仓库，即使有冲突</p>
                            <p>$ git push [remote] --force</p>
                            <p><br/></p>
                            <p># 推送所有分支到远程仓库</p>
                            <p>$ git push [remote] --all</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; border-width: 1px; border-style: solid; background-color: rgb(238, 236, 225);"
                            width="325"><p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <p><br/></p>
                            <h1>九、撤销</h1>
                            <p><br/></p></td>
                        <td valign="top"
                            style="border-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-width: 1px; border-style: solid;"
                            width="771"><p># 恢复暂存区的指定文件到工作区</p>
                            <p>$ git checkout [file]</p>
                            <p><br/></p>
                            <p># 恢复某个commit的指定文件到暂存区和工作区</p>
                            <p>$ git checkout [commit] [file]</p>
                            <p><br/></p>
                            <p># 恢复暂存区的所有文件到工作区</p>
                            <p>$ git checkout .</p>
                            <p><br/></p>
                            <p># 重置暂存区的指定文件，与上一次commit保持一致，但工作区不变</p>
                            <p>$ git reset [file]</p>
                            <p><br/></p>
                            <p># 重置暂存区与工作区，与上一次commit保持一致</p>
                            <p>$ git reset --hard</p>
                            <p><br/></p>
                            <p># 重置当前分支的指针为指定commit，同时重置暂存区，但工作区不变</p>
                            <p>$ git reset [commit]</p>
                            <p><br/></p>
                            <p># 重置当前分支的HEAD为指定commit，同时重置暂存区和工作区，与指定commit一致</p>
                            <p>$ git reset --hard [commit]</p>
                            <p><br/></p>
                            <p># 重置当前HEAD为指定commit，但保持暂存区和工作区不变</p>
                            <p>$ git reset --keep [commit]</p>
                            <p><br/></p>
                            <p># 新建一个commit，用来撤销指定commit</p>
                            <p># 后者的所有变化都将被前者抵消，并且应用到当前分支</p>
                            <p>$ git revert [commit]</p>
                            <p><br/></p>
                            <p># 暂时将未提交的变化移除，稍后再移入</p>
                            <p>$ git stash</p>
                            <p>$ git stash pop</p></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="2" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="456"><br/></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="1" rowspan="1"
                            style="border-width: 1px; border-style: solid; border-left-color: rgb(221, 221, 221); border-top-color: rgb(221, 221, 221); word-break: break-all; background-color: rgb(238, 236, 225);"
                            width="162"><h1>十、其他</h1>
                            <p><br/></p></td>
                        <td valign="top" colspan="1" rowspan="1"
                            style="border-left: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221); word-break: break-all; background-color: rgb(221, 217, 195); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;"
                            width="771"><p># 生成一个可供发布的压缩包</p>
                            <p>$ git archive</p></td>
                    </tr>
                    </tbody>
                </table>
                <p><br/></p></div>
        </div>
        <div class="panel-footer"></div>
        </div>
    </div>
</div>


<script type="text/javascript">
    uParse('#content', {
        rootPath: '/share/plug/ueditor1_4_3_3/'
    })
</script>

<!-- /container -->


</body>
</html>
