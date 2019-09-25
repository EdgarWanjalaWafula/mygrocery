<?php
/**
 * The template for displaying the home page. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mygroceries
 */

get_header();
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'home' );

    endwhile; // End of the loop.
get_footer();
