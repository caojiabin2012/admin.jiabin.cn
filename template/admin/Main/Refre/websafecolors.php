<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = ''; include(__DIR__.'/tablist.php');?>
        

        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            216 Web安全色对照表 <code>窍门： Ctrl+F 快速查找</code>
        </div>
        <iframe src="/public/plug/webcolor/refre/safecolorif.html" frameborder="0" width="100%" height="1200px" style="max-height: 99999" marginheight="0" marginwidth="0" scrolling="yes"></iframe>
        <!-- <iframe src="https://redash.sunfund.com/embed/query/13/visualization/32?api_key=85b248f3370a99e05385210e178474a9b2cf4214" width="720" height="391"></iframe> -->

        

    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>
