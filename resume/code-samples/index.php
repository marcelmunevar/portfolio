<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- JQUERY -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!--<link rel="stylesheet" href="/css/non-responsive.css" >-->
    <!-- custom style sheet -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/slider.css">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <!-- bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="/js/slider.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <script>
        $(function() {
            jQuery(".outerWrapper").slider(
                jQuery(".leftButton"),
                jQuery(".rightButton"),
                { 'ButtonsCSS'	:	false }
            );
        });
    </script>


    <?php
    $siteTitle = "Marcel's Resumé";
    $pageTitle = "Code Samples";
    $pageSubtitle = "";
    ?>

    <title><?=$siteTitle?></title>

</head>

<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?=$siteTitle?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/resume/">Resumé</a></li>
                <li class="active"><a href="/resume/code-samples/">Code Samples</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/resume">Resumé</a></li>
    <li class="active">Code Samples</li>
</ol>



<div class="container">

    <div class="front-page container-fluid">
        <div class="page-header col-lg-12">
            <h1><?=$pageTitle?></h1>
            <h3><?=$pageSubtitle?></h3>
        </div>

        <div class="col-lg-12">

            <dl>
                <dt>JQuery Slider Plugin</dt>
                <dd>A responsive jQuery slider plugin.</dd>
                <a class="btn btn-primary" href="/resume/code-samples/jquery-slider-plugin/">View Demo &raquo </a>
                <a class="btn btn-primary" target="_blank" href="http://github.com/Killeramoeba/jquery-slider-plugin/">View Source on Github &raquo </a>
            </dl>

            <dl>
                <dt>Blue Responsive</dt>
                <dd>A responsive page made without bootstrap.</dd>
                <a class="btn btn-primary" target="_blank" href="http://blue.developer21.com/">View Demo &raquo </a>
                <a class="btn btn-primary" target="_blank" href="https://github.com/Killeramoeba/blue">View Source on Github &raquo </a>
            </dl>

            <dl>
                <dt>Lazy RSS Feed</dt>
                <dd>An RSS feed that loads more results on scroll.</dd>
                <a class="btn btn-primary" target="_blank" href="http://jsfiddle.net/Amoebaone/ppywntfx/">View on JSFiddle &raquo </a>
            </dl>



        </div>




    </div>
</div><!-- /.container -->

</body>

</html>



