
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Vue.js markdown editor example</title>
    <link rel="stylesheet" href="/share/plug/vue-2.4.1/examples/markdown/style.css">
    <script src="https://unpkg.com/marked@0.3.6"></script>
    <script src="https://unpkg.com/lodash@4.16.0"></script>
    <!-- Delete ".min" for console warnings in development -->
    <script src="/share/plug/vue-2.4.1/dist/vue.min.js"></script>
  </head>
  <body>

    <div id="editor">
      <!-- <textarea :value="input" @input="update"></textarea> -->
      <input :value="input" @input="update" type="hidden">
      <div v-html="compiledMarkdown"></div>
    </div>

    <script>
      new Vue({
        el: '#editor',
        data: {
          input: '# er'
        },
        computed: {
          compiledMarkdown: function () {
            return marked(this.input, { sanitize: true })
          }
        },
        methods: {
          update: _.debounce(function (e) {
            this.input = e.target.value
          }, 300)
        }
      })
    </script>

  </body>
</html>
