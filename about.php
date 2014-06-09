<?php
/**
 * Template Name: about
 *
 * standard home page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="me">
	  <?php echo get_avatar( 'sherrie.gonzalez@me.com', 200 ); ?>
</div>

<div id="about">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>