<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title(''); ?></title>
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/jw_icon_57.jpg"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>


<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">  
<meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=160">

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/global.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.timer.js"></script>

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8.css" />
<![endif]-->

<!--[if lt IE 8]>
<script type="text/javascript">
$(document).ready(function() {
   alert('This site is optimized for IE8 and above. Some elements and features are not avalible in lower versions.');
});
</script>
<![endif]-->

</head>

<body <?php body_class(); ?>>

<div class="wrapper">
	<div class="center">
		<div class="holder-icon clearfix">
			<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/jw_icon.jpg" alt="my-icon" /></a>
		</div>