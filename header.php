<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>     <html class="ie8" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<div id="header">

<div class="top-bar">

	<div class="top_container">

		<h1 class="logo"><a href="<?php echo home_url( '/' ); ?>">Cloud #9</a></h1>

		<h1 class="menu-toggle">&#9776;</h1>

		<div id="access" role="navigation">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary') ); ?>
				<div class="clear"></div>
		</div><!--END #access -->

		<div class="clear"></div>

	</div><!--END .top-container -->

</div>

	<div class="head-container">

	<div id="buckle"></div>
		
	<div id="blurb">	
		<h1 id ="title">Hello, my name is Sherrie</h1>
		<p>I am a Graphic Designer and Front End Developer in the Boston Metro Area. I'm available for short term contract jobs and freelance.
		</p>
	</div>

	<div class="social">

		<a class="icon" id="twit_but" href="http://twitter.com/#!/sherrieberrie" target="_blank"></a>
		
		<a class="icon" id="fb_but" href="http://www.facebook.com/plasticgirl" target="_blank"></a>
		
		<a class="icon" id="ln_but" href="http://www.linkedin.com/pub/sherrie-gonzalez/4/772/108" target="_blank"></a>

		<div class="clear"></div>

	</div> <!-- END social--> 

	<div class="clear"></div>
		
	</div> <!-- END head-container--> 

	<div class="clear"></div>

	<div id="head_stitch"></div>

</div>

<body <?php body_class(); ?>>



	<h6>
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</h6>
	
	
<div id="content">
	<div class="content-container">
