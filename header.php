<?php 
	$templateDir = get_template_directory_uri();
	$homeURL = home_url();
 ?>
<!DOCTYPE html>
<html><head>
<title>Design Lift-Off - by Aaron Neville</title>
<meta charset="UTF-8">
<meta name="description" content="" />
<link rel="icon" href="<?php echo $templateDir; ?>/img/favicon.ico" type="image/x-ico"/>



<!-- SCRIPTS -->
<script type="text/javascript" src="<?php echo $templateDir; ?>/js/jquery-1.7.1.min.js"></script>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="<?php echo $templateDir; ?>/css/kickstart.css" media="all" />
<link rel="stylesheet" href="<?php echo $templateDir; ?>/js/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $templateDir; ?>/js/fancybox/jquery.fancybox.css" media="all" />
<link rel="stylesheet" href="<?php echo $templateDir; ?>/js/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $templateDir; ?>/style.css" media="all" />

<!-- JAVASCRIPT -->
<script type="text/javascript" src="<?php echo $templateDir; ?>/js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $templateDir; ?>/js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="<?php echo $templateDir; ?>/js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?php echo $templateDir; ?>/js/prettify.js"></script>
<script type="text/javascript" src="<?php echo $templateDir; ?>/js/kickstart.js"></script>
<script type="text/javascript" src="<?php echo $templateDir; ?>/scripts.js"></script>
</head>


<!-- BODY -->
<body>
<a id="top-of-page"></a>
<div id="wrap" class="clearfix">


<!-- HEADER -->
<header class="page-header clearfix">
	<a href="<?php echo $homeURL; ?>">
		<img src="<?php echo $templateDir; ?>/img/logo_rocketcircle.png">
		<img src="<?php echo $templateDir; ?>/img/logo_name.png">
		<h1>
			Design Lift-Off
		</h1>
		<p>by Aaron Neville</p>
	</a>
<?php 
	wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'header-nav clearfix', 'menu_class' => '' , 'menu_id' => '' ) );
?>
</header>