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
    $pageTitle = "Marcel Munevar";
    $pageSubtitle = "Web Developer";
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
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/resume/">Resumé</a></li>
                    <li><a href="/resume/code-samples/">Code Samples</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="active">Home</li>
    </ol>


    <div class="container">

        <div class="front-page">
            <div class="page-header">
                <h1><?=$pageTitle?></h1>
                <h3><?=$pageSubtitle?></h3>
            </div>
            <div class="jumbotron">
                <p>Hi, my name is Marcel Munevar. I have extensive experience as a web developer. I tend to focus on intuitive user experience and a strong framework while utilizing databases and content management systems. This has always been my passion since i was very young. I am comfortable and highly effective working with small start-ups, large corporations, or independently.</p>
                <a class="btn btn-primary" href="resume/">Resumé » </a>
            </div>

            <div class="gallery" style="border-radius:5px 5px 0 0;">
                <h3 style="text-align:center;">Sites I've worked on</h3>
                <div class="outerWrapper">
                    <div class="innerWrapper">
                        <div>
                            <a href="http://nova.edu/" target="_blank">
                                <img src="img/sites/thumb/nova.jpg" width="188" alt="Nova SE University" title="Nova SE University">
                                <p>Nova SE University</p>
                            </a>
                        </div>
                        <div>
                            <a href="http://www.morris4x4center.com/" target="_blank">
                                <img src="img/sites/thumb/morris.jpg" width="188" alt="Morris4x4Center" title="Morris4x4Center">
                                <p>Morris4x4Center</p>
                            </a>
                        </div>
                        <div>
                            <a href="http://www.benjaminmoore.com/" target="_blank">
                                <img src="img/sites/thumb/bm.jpg" width="188" alt="Benjamin Moore" title="Benjamin Moore">
                                <p>Benjamin Moore</p>
                            </a>
                        </div>
                        <div>
                            <a href="http://www.plantant.com/" target="_blank">
                                <img src="img/sites/thumb/plantant.jpg" width="188" alt="plantANT" title="plantANT">
                                <p>plantANT</p>
                            </a>
                        </div>
                        <div>
                            <a href="http://m.benjaminmoore.com/" target="_blank">
                                <img src="img/sites/thumb/bm-mobile.jpg" width="188" alt="Benjamin Moore Mobile" title="Benjamin Moore Mobile">
                                <p>Benjamin Moore Mobile</p>
                            </a>
                        </div>
                        <div>
                            <a href="http://m.thelandscapeshow.com/" target="_blank">
                                <img src="img/sites/thumb/fngla-mobile.jpg" width="188" alt="FNGLA Mobile" title="FNGLA Mobile">
                                <p>FNGLA Mobile</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-radius:0 0 5px 5px;border: 1px solid #ccc; border-top:0 none; overflow: auto; background-color: #fff;margin-bottom:30px;">
                <div class="leftButton" style="left: 0px; position: relative; top: 0px; float: left; margin: 10px; visibility: hidden;"></div>
                <div class="rightButton" style="position: relative; top: 0px; float: right; margin: 10px; visibility: visible;"></div>
            </div>


            <style>
                .thumbnails img {margin:15px;}
            </style>
            <div class="panel panel-default">
                <div class="row">
                    <div class="col-xs-12 thumbnails">
                        <img src="img/technologies/thumb/html.jpg" alt="html" width="75">
                        <img src="img/technologies/thumb/css.jpg" alt="css"  width="75">
                        <img src="img/technologies/thumb/js.jpg" alt="js"  width="75">
                        <img src="img/technologies/thumb/jquery.jpg" alt="jquery" width="75">
                        <img src="img/technologies/thumb/php.jpg" alt="php" width="75">
                        <img src="img/technologies/thumb/mysql.jpg" alt="mysql" width="75">
                        <img src="img/technologies/thumb/magento.jpg" alt="magento" width="75">
                        <img src="img/technologies/thumb/dotcms.jpg" alt="dotcms" width="75">
                    </div>
                </div>
            </div>


        </div>
    </div><!-- /.container -->

</body>

</html>



