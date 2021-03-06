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

<link href="css/video-js.css" rel="stylesheet">
<link rel="stylesheet" href="css/all.css">
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

<script src="js/icheck.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/star-rating.js"></script>
<script src="js/slick.js"></script>
<script src="js/jquery.mCustomScrollbar.js"></script>

<script src="js/class.SiteMain.js"></script>


</head>
<body>
	<div id="container">
        <div class="wrapper">

        	<?php 
        		include("modules/includes/header.php");
				$module = isset($_REQUEST['module']) ? $_REQUEST['module']: "home";
				include("modules/$module.php");
				if($module != 'home')
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