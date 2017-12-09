<?php
use Common\Utils ;
?>
<link rel="stylesheet" href="/public/plug/vue-2.4.1/examples/markdown/style.css">
<script src="https://unpkg.com/marked@0.3.6"></script>
<script src="https://unpkg.com/lodash@4.16.0"></script>
<!-- Delete ".min" for console warnings in development -->
<script src="/public/plug/vue-2.4.1/dist/vue.min.js"></script>
<?php include(dirname(dirname(__DIR__)).'/header.php');?>
<div class="container">
    <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
    <!-- <?php $active = 'php'; include(__DIR__.'/tablist.php');?> -->
     <br/>

       <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>PHP指南!</strong> 活到老学到老， 按F11进入全屏，按ESC退出全屏。
        </div>
      <div id="editor">
        <textarea :value="input" @input="update" value='<?php echo file_get_contents("/mnt/hgfs/htdocs/www/jiabin/admin.jiabin.cn/webroot/README.md") ?>'></textarea>
        <div v-html="compiledMarkdown"></div>
    </div>


    <script>
    var data= "# 1";
      new Vue({
        el: '#editor',
        data: {
          input: data
        },
        computed: {
          compiledMarkdown: function () {
            return marked(this.input, { sanitize: true })
          }
        },
        methods: {
          update: _.debounce(function (e) {
            console.log(e.target.value)
            this.input = e.target.value
          }, 300)
        }
      });
  // document.
    </script>
</body>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>