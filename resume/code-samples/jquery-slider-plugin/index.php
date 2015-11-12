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
    <link rel="stylesheet" href="/css/slider.css">
    <!-- CSS END -->

    <!-- JS -->
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <!-- bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="/js/slider.js"></script>
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

    <script>
    jQuery(function() {
        jQuery(".outerWrapper.clipEdge-example").slider(
            jQuery(".leftButton.clipEdge-example"),
            jQuery(".rightButton.clipEdge-example")
        );
        jQuery(".outerWrapper.buttons-outside-example").slider(
            jQuery(".leftButton.buttons-outside-example"),
            jQuery(".rightButton.buttons-outside-example"),
            { 'ButtonsCSS'	:	false }
        );
    });
    </script>


    <?php
    $siteTitle = "Marcel's Resumé";
    $pageTitle = "JQuery Slider Plugin";
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
        <li><a href="/resume/">Resumé</a></li>
        <li><a href="/resume/code-samples/">Code Samples</a></li>
        <li class="active">Jquery Slider Plugin</li>
    </ol>

    <div class="container">



        <div class="front-page">
            <div class="page-header">
                <h1><?=$pageTitle?></h1>
            </div>
        </div>


        <h2 id="download">Download</h2>
        <a style="margin:0 0 10px 0;" class="btn btn-primary" href="http://github.com/Killeramoeba/jquery-slider-plugin/archive/master.zip">Download From Github &raquo </a><br>
        <a style="margin:0 0 10px 0;" class="btn btn-primary" target="_blank" href="http://github.com/Killeramoeba/jquery-slider-plugin/">View Source on Github &raquo </a>
        <p>All images and files are completely free for both commercial use and private use.</p>
        <p>
            Updated on
            <script>
                var d= new Date();
                d.setTime(1425015826000);
                document.write(d);
            </script>.
        </p>

        <h2 id="demo">Demo</h2>
        <p><code>Default Options</code></p>
        <div class="gallery">
            <div class="leftButton clipEdge-example"></div>
            <div class="rightButton clipEdge-example"></div>
            <div class="outerWrapper clipEdge-example">
                <div class="innerWrapper">
                    <a href="img/fullsize/1.jpg" rel="group2"><img src="img/thumbs/1.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/2.jpg" rel="group2"><img src="img/thumbs/2.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/3.jpg" rel="group2"><img src="img/thumbs/3.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/4.jpg" rel="group2"><img src="img/thumbs/4.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/5.jpg" rel="group2"><img src="img/thumbs/5.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/6.jpg" rel="group5"><img src="img/thumbs/6.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/7.jpg" rel="group5"><img src="img/thumbs/7.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/8.jpg" rel="group5"><img src="img/thumbs/8.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/9.jpg" rel="group5"><img src="img/thumbs/9.jpg" width="144" height="109"></a>
                </div>
            </div>
        </div>
        <br>
        <p>If you need to, you can put the navigation buttons outside of the gallery div. If you do this make sure to set the correct options.</p>
        <p><code>'ButtonsCSS'	:	false</code></p>
        <div class="gallery">
            <div class="outerWrapper buttons-outside-example">
                <div class="innerWrapper">
                    <a href="img/fullsize/1.jpg" rel="group5"><img src="img/thumbs/1.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/2.jpg" rel="group5"><img src="img/thumbs/2.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/3.jpg" rel="group5"><img src="img/thumbs/3.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/4.jpg" rel="group5"><img src="img/thumbs/4.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/5.jpg" rel="group5"><img src="img/thumbs/5.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/6.jpg" rel="group5"><img src="img/thumbs/6.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/7.jpg" rel="group5"><img src="img/thumbs/7.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/8.jpg" rel="group5"><img src="img/thumbs/8.jpg" width="144" height="109"></a>
                    <a href="img/fullsize/9.jpg" rel="group5"><img src="img/thumbs/9.jpg" width="144" height="109"></a>
                </div>
            </div>
        </div>

        <div  style="border: 1px solid #ccc; border-top:0 none; overflow: auto; background-color: #fff;">
            <div class="leftButton buttons-outside-example" style="left:0; position:relative; top:0; float:left; margin:10px;"></div>
            <div class="rightButton buttons-outside-example" style="position:relative; top:0; float:right; margin:10px;"></div>
        </div>
        <br>


        <h2 id="options">Options</h2>
        <table class="table table-bordered table-striped" width="100%">
            <tr>
                <th>Key</th>
                <th>Default Value</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>PageSize</td>
                <td>Responsive</td>
                <td>Number of images to be displayed on each page. Can be set to auto, responsive, or a static number.</td>
            </tr>
            <tr>
                <td>Whitespace</td>
                <td>false</td>
                <td>When false, do not include white space on the last page.</td>
            </tr>
            <tr>
                <td>ButtonsCSS</td>
                <td>true</td>
                <td>When false, no styles will be applied to buttons and outerWrapper will fill its container.</td>
            </tr>

        </table>
        <!-- **********HEADER********** -->
        <h2>How To Use</h2>
        <h3 id="css-js">1. Include CSS & JavaScript</h3>
        <p>
            <code>&lt;link href="slider.css" rel="stylesheet" &gt;</code><br>
        </p>

        <p>Make sure to include jQuery First.</p>
        <p>
            <code>&lt;script src="http://code.jquery.com/jquery-latest.min.js"&gt;&lt;/script&gt;</code><br>
            <code>&lt;script src="slider.js"&gt;&lt;/script&gt;</code>
        </p>

        <!-- **********HEADER********** -->
        <h3 id="html">2. Include HTML</h3>
                <pre>
&lt;div class="gallery"&gt;
    &lt;div class="leftButton"&gt;&lt;/div&gt;
    &lt;div class="rightButton"&gt;&lt;/div&gt;
    &lt;div class="outerWrapper"&gt;
        &lt;div class="innerWrapper"&gt;
            &lt;a href="img/fullsize/1.jpg" rel="group1"&gt;&lt;img src="img/thumbs/1.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/2.jpg" rel="group1"&gt;&lt;img src="img/thumbs/2.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/3.jpg" rel="group1"&gt;&lt;img src="img/thumbs/3.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/4.jpg" rel="group1"&gt;&lt;img src="img/thumbs/4.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/5.jpg" rel="group1"&gt;&lt;img src="img/thumbs/5.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/6.jpg" rel="group1"&gt;&lt;img src="img/thumbs/6.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/7.jpg" rel="group1"&gt;&lt;img src="img/thumbs/7.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/8.jpg" rel="group1"&gt;&lt;img src="img/thumbs/8.jpg" width="144" height="109"&gt;&lt;/a&gt;
            &lt;a href="img/fullsize/9.jpg" rel="group1"&gt;&lt;img src="img/thumbs/9.jpg" width="144" height="109"&gt;&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                </pre>

        <!-- **********HEADER********** -->
        <h3 id="fire-plugins">3. Fire Plugins using jQuery Selectors</h3>
                <pre>
//on page load
jQuery(function() {
    jQuery(".outerWrapper").slider(
        jQuery(".leftButton"),
        jQuery(".rightButton"),
        {
            'PageSize'	:	'auto',
            'Whitespace'	:	true,
            'ButtonsCSS'	:	false
        }
    );
});
				</pre>


        <!-- **********HEADER********** -->
        <h3 id="customize-css">4. Customize slider.css</h3>

                <pre>
.gallery
{
	height:138px; /* adjust height of gallery */
	background-color:#fdfdfd; /* set background color of gallery */
	border:1px solid #ccc; /* set desired border */
	position:relative;
	overflow:hidden;
}
.outerWrapper
{
	padding:11.5px 0; /* adjust distance from top here */
	margin:auto;
	overflow:hidden;
}
.outerWrapper img
{
	margin-right:20px; /* adjust for space between images */
	box-shadow:0 0 8px #000000; /* adjust box-shadow */
	border:3px solid #fff; /* adjust border (gives polaroid effect) */
	visibility:hidden;
	float:left;
}
.leftButton, .rightButton
{
	background-image:url('img/arrows.png'); /* you can set any image you want for this. keep in mind it's a sprite. */
	width:28px; /* You may need to change this if you change the background image */
	height:28px; /* You may need to change this if you change the background image */
	visibility:hidden;
	cursor:pointer;
	position:absolute;
}
.leftButton
{
	background-position:left;
	left:18px; /* adjust distance from edge for buttons */
}
.rightButton
{
	background-position:right;
}
                </pre>

    </div><!--MAIN-->


</body>

</html>



