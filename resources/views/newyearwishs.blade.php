<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Rocking Letters with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Rocking Letters with CSS3 and jQuery" />
        <meta name="keywords" content="css3, jquery, letters, words, animation, shake, crash, effect, rock, fly in" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="public/newyearwishs/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="public/newyearwishs/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="public/newyearwishs/js/modernizr.custom.66501.js"></script>

    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top" style="visibility: hidden;">
                <a href="http://yhvreddy.com/home">
                    <strong>&laquo; Portfolio : </strong> Yhvreddy.com
                </a>
                <span class="right">
					<a href="#" target="_blank"></a>
                    <a href="#">
                        <strong></strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<header style="visibility: hidden;">
				<a id="ll-button" class="button" href="#">Rock it!</a>
			</header>
			<p id="ll-message" class="ll-message">Thank you for your support.! <br /><span>We wish you a great </span></p>
			<div id="ll-wrapper" class="ll-wrapper">
				<h3>Happy</h3>
				<h3>New</h3>
				<h3>Year</h3>
                <h3>2020</h3>
			</div>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="public/newyearwishs/js/jquery.lettering.js"></script>
        <script type="text/javascript" src="public/newyearwishs/js/jquery.animation.js"></script>
        <script>
            jQuery(function(){
                jQuery('#ll-button').click();
                window.setTimeout(function() {
                    window.location.href = 'http://yhvreddy.com';
                }, 8500);
            });
        </script>
    </body>
</html>