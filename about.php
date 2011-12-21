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

<div id="about">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

<?php endwhile; ?>

</div>

<div id="me"><img src="http://www.sherriegonzalez.com/wp-content/themes/Starkers/images/me.jpeg"></div>

<?php get_footer(); ?>