<?php
/**
 * The template for displaying the contact us page. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mygroceries
 */

get_header();

// Show page title 
get_template_part('template-parts/content', 'page-title' ); 
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'contact' );

    endwhile; // End of the loop.
get_footer();
