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

<div class="clear"></div>

</div><!--END content-container-->

</div><!--END content-->

<div id= "footer">

	<div class="footer-container">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
		<div id="foot_text">
			<p>
				<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> is © Sherrie Gonzalez</a> 
			</p>
		</div><!--END foot_text--> 
		<div class="clear"></div>
	</div> <!--END footer-container --> 
</div> <!--END #footer --> 
</body>
</html>