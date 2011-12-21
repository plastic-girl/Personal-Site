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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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

<div id="head_stitch"></div>

<div id="buckle"></div>

<div id="title">
	<h1>
	Hello, my name is Sherrie
	</h1>
</div>	
	
<div id="blurb">	
	<p>
	and this is my space on the web. I am a Graphic Designer and Front End Developer. I made my first website in 1998. When I'm not designing, I enjoy jogging, riding my bicycle and drinking fancy beers. Feel free to contact me if you like any or all of things I've just talked about.
	</p>
</div>

<div id="access" role="navigation">
		 <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary') ); ?><a href="http://www.rugglesisforlovers.com"> Blog</a>

	</div><!-- #access -->

<div class="social">

	<a class="icon" id="twit_but" href="http://twitter.com/#!/sherrieberrie" target="_blank"></a>
	
	<a class="icon" id="fb_but" href="http://www.facebook.com/plasticgirl" target="_blank"></a>
	
	<a class="icon" id="ln_but" href="http://www.linkedin.com/pub/sherrie-gonzalez/4/772/108" target="_blank"></a>
	

</div> <!-- END social--> 
	
</div>

<body <?php body_class(); ?>>



	<h6>
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</h6>
	
	
<div id="content">
