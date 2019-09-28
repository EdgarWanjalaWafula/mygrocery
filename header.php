<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mygroceries
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-md w-100">
					<!-- Site logo  -->
					<?php the_custom_logo(''); ?>

					<!-- Toggle Button -->
					<div class="toggle-container menu-drawer-button">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<?php
						wp_nav_menu([
							'menu'            => 'menu-1',
							'theme_location'  => 'menu-1',
							'container'       => 'div',
							'container_id'    => 'bs4navbar',
							'container_class' => 'collapse navbar-collapse justify-content-end w-100',
							'menu_id'         => false,
							'menu_class'      => 'navbar-nav gcc-menu',
							'depth'           => 2,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()
						]);
					?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="mygroceries-content">
