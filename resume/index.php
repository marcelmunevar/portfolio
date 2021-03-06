<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS -->
    <!-- JQUERY -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!--<link rel="stylesheet" href="/css/non-responsive.css" >-->
    <!-- custom style sheet -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- CSS END -->

    <!-- JS -->
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <!-- bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- turn -->
    <script type="text/javascript" src="turnjs4/extras/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="turnjs4/extras/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="turnjs4/lib/hash.js"></script>
    <!-- JS END -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <?php
    $siteTitle = "Marcel's Resumé";
    $pageTitle = "Marcel's Resumé";
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
                    <li class="active"><a href="/resume/">Resumé</a></li>
                    <li><a href="/resume/code-samples/">Code Samples</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Resumé</li>
    </ol>

    <div class="container">

        <div class="front-page">
            <div class="page-header">
                <h1><?=$pageTitle?></h1>
            </div>
            <p class="lead">Web Developer</p>

            <a style="margin-bottom:15px;" class="btn btn-primary" href="marcels-resume.doc">Download Resumé » </a>

            <a style="margin-bottom:15px;" class="btn btn-primary" href="/resume/code-samples/">View Code Sample » </a>

            <style>
                @media (max-width: 991px) {
                    .my-flipbook{display:none;}
                }
            </style>

            <div class="my-flipbook" style="clear:both;position:relative;overflow:hidden;height:635px;">
                <div class="flipbook-viewport">
                    <div class="flipbook-container">
                        <div class="flipbook">
                            <div style="background-image:url(turnjs4/pages/1.jpg?v=3)"></div>
                            <div style="background-image:url(turnjs4/pages/2.jpg?v=3)"></div>
                            <div style="background-image:url(turnjs4/pages/3.jpg?v=3)"></div>
                            <div style="background-image:url(turnjs4/pages/4.jpg?v=3)"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function loadApp() {
                    $('.flipbook').turn({
                        width:922,
                        height:600,
                        elevation: 50,
                        gradients: true,
                        autoCenter: true
                    });
                }
                yepnope({
                    test : Modernizr.csstransforms,
                    yep: ['turnjs4/lib/turn.js'],
                    nope: ['turnjs4/lib/turn.html4.min.js'],
                    both: ['css/basic.css'],
                    complete: loadApp
                });
            </script>


        </div>

    </div><!-- /.container -->

</body>

</html>



