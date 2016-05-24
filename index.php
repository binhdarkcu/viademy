<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.ico" />
<title>Viademy</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=640">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/all.css">
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/icheck.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/star-rating.js"></script>
<script src="js/slick.js"></script>
<script src="js/jquery.mCustomScrollbar.js"></script>
<script src="js/class.SiteMain.js"></script>

<link href="http://vjs.zencdn.net/5.10.2/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 -->
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
</head>
<body>
	<div id="container">
        <div class="wrapper">

        	<?php 
        		include("modules/includes/header.php");
				$module = isset($_REQUEST['module']) ? $_REQUEST['module']: "home";
				include("modules/$module.php");
				include("modules/includes/footer.php");
			?>
        </div>
    </div>

    <?php
    	include("popups/login.php");
        include("popups/register.php");
    ?>
</body>
</html>