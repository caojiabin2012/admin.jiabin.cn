<!DOCTYPE html>
<html lang="en" ng-app="linuxDash">
    <head>
        <title>linux-dash : Server Monitoring Web Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Monitor your Linux server through a simple web dashboard. Open source and free!">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
        <link rel="icon" href="static/favicon.ico" type="image/x-icon">
        <link href='//fonts.googleapis.com/css?family=Merriweather:300italic,300|Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/public/plug/LinuxDash/static/css/main.css">
        <link rel="stylesheet" type="text/css" href="/public/plug/LinuxDash/static/css/themes.css">
        <link rel="stylesheet" type="text/css" href="/public/plug/LinuxDash/static/css/animate.css">

        <!-- Angular Libs -->
        <script src="/public/plug/LinuxDash/static/js/angular.min.js" type="text/javascript"></script>
        <script src="/public/plug/LinuxDash/static/js/angular-route.js" type="text/javascript"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body ng-controller="body">

        <div class="hero">
            <h4 class="title">Linux Dash</h4>
            <small>A simple linux dashboard for swoole</small>
            <theme-switcher></theme-switcher>
            <nav-bar></nav-bar>
        </div>

        <div ng-if="!serverSet">
            <h2>Setting server...</h2>
            <loader></loader>
        </div>

        <!-- Templates Get Rendered Here -->
        <div ng-if="serverSet" id="plugins" class="animated fadeInDown" ng-view></div>

        <!-- Javascript-->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/public/plug/LinuxDash/static/js/linuxDash.js" type="text/javascript"></script>
        <script src="/public/plug/LinuxDash/static/js/modules.js" type="text/javascript"></script>
        <script src="/public/plug/LinuxDash/static/js/smoothie.min.js" type="text/javascript"></script>
    </body>
</html>
