<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

</div>

<div id= "footer">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<div id="contact">
	<h2>Contact Info</h2>
	<ul>
		<li><a href="mailto:sherrie.gonzalez@me.com">Email Me</a></li>
		<li><a href="http://www.sherriegonzalez.com/wp-content/themes/Starkers/resume-final.pdf">Resume PDF</a></li>
	</ul>
</div>

<div id="made">
	<h2>Awesome tools</h2>
	<ul>
		<li><a href="http://www.apple.com">Mac OSX</a></li>
		<li><a href="http://www.adobe.com">Adobe CS5 Master Collection</a></li>
		<li><a href="http://panic.com/coda">Coda by Panic</a></li>
		<li><a href="http://www.css-tricks.com">CSS Tricks</a></li>
	</ul>
</div>

<div id="friends">
	<h2>Friends</h2>
	<ul>
		<li><a href="http://www.braydenvarr.com">Brayden Varr</a></li>
		<li><a href="http://www.martzi.com">Martzi Campos</a></li>
		<li><a href="http://www.theabbsman.com/Site/Home.html">Andrew Abbott</a></li>
		<li><a href="http://random-variables.com/">Random Variables</a></li>
	</ul>
</div>

<div id="love">
	<h2>Things I love</h2>
	<ul>
		<li><a href="http://www.fluevog.com">John Fluevog Shoes</a></li>
		<li><a href="http://www.prettythingsbeertoday.com/wp/">Pretty Things Beer</a></li>
		<li><a href="http://design.thoughtbot.com/">Design with Boston</a></li>
		<li><a href="http://www.cartoonnetwork.com/tv_shows/adventuretime/index.html">Adventure Time!</a></li>
	</ul>
</div>

<div id="foot_text">
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> is © Sherrie Gonzalez |</a> 
			<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Powered by WordPress </a>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</div> <!-- #footer --> 
</body>
</html>