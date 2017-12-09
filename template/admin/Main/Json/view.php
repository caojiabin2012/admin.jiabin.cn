<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html class="ext-strict x-viewport">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSON在线视图查看器(Online JSON Viewer)</title>
        <meta name="description" content="JSON在线视图查看器(Online JSON Viewer)">
        <meta name="keywords" content="JSON在线视图查看器(Online JSON Viewer)" />
        <link rel="stylesheet" type="text/css" href="/share/plug/jsonview/ext-all.css">
        <script type="text/javascript" src="/share/plug/jsonview/ext-base.js">
        </script>
        <script type="text/javascript" src="/share/plug/jsonview/ext-all.js">
        </script>
        <style type="text/css" id="styleSheetIconCls">/* Ext.ux.iconCls */
        </style>
        <style type="text/css">
            .br0 {
                COLOR: #009900
            }
            
            .st0 {
                COLOR: #3366cc
            }
            
            .sy0 {
                COLOR: #339933
            }
        </style>
        <script>
            window.onload = function(){
                var oTxt = document.getElementById("edit");
                oTxt.onkeydown = function(ev){
                    var oEvent = ev || event;
                    if (oEvent.keyCode == 9) {
                        if (oEvent.preventDefault) {
                            oEvent.preventDefault();
                        }
                        else {
                            window.event.returnValue = false;
                        }
                        oTxt.value += "    "; //这里放入了4个空格
                    }
                    
                }
            }
        </script>
        <script type="text/javascript" src="/share/plug/jsonview/jsonview.js">
        </script>
        <div id="ext-comp-1004" class="x-tab-panel" style="width: 1240px;margin-top:80px ">
            <div class="x-tab-panel-header x-unselectable" id="ext-gen21" style="-webkit-user-select: none; width: 1238px; ">
                <div class="x-tab-strip-wrap" id="ext-gen25">
                    <ul class="x-tab-strip x-tab-strip-top" id="ext-gen27">
                        <li class="" id="ext-comp-1004__viewerPanel">
                            <a class="x-tab-strip-close" onclick="return false;"></a>
                            <a class="x-tab-right" href="http://www.jiangliang.net/json/#" onclick="return false;"><em class="x-tab-left"><span class="x-tab-strip-inner"><span class="x-tab-strip-text ">Viewer</span></span></em></a>
                        </li>
                        <li class=" x-tab-strip-active" id="ext-comp-1004__textPanel">
                            <a class="x-tab-strip-close" onclick="return false;"></a>
                            <a class="x-tab-right" href="http://www.jiangliang.net/json/#" onclick="return false;"><em class="x-tab-left"><span class="x-tab-strip-inner"><span class="x-tab-strip-text ">Text</span></span></em></a>
                        </li>
                        <li class="x-tab-edge" id="ext-gen28">
                        </li>
                        <div class="x-clear" id="ext-gen29">
                        </div>
                    </ul>
                </div>
                <div class="x-tab-strip-spacer" id="ext-gen26">
                </div>
            </div>
        </div>
        <div id="ext-comp-1001" class="x-tip" style="position: absolute; z-index: 20000; visibility: hidden; display: none; ">
            <div class="x-tip-tl">
                <div class="x-tip-tr">
                    <div class="x-tip-tc">
                        <div class="x-tip-header x-unselectable" id="ext-gen10" style="-webkit-user-select: none; ">
                            <span class="x-tip-header-text"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="x-tip-bwrap" id="ext-gen11">
                <div class="x-tip-ml">
                    <div class="x-tip-mr">
                        <div class="x-tip-mc">
                            <div class="x-tip-body" id="ext-gen12" style="height: auto; ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="x-tip-bl x-panel-nofooter">
                    <div class="x-tip-br">
                        <div class="x-tip-bc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    	<!-- /container -->


  </body>
</html>	