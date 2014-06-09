<?php
/**
 * Template Name: slider
 *
 * Page of thumbnails.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="gallery" class="slider">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

<?php endwhile; ?>


</div>

<?php get_footer(); ?>