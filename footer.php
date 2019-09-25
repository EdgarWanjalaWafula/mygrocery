<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mygroceries
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="m-0 small">Copyright &copy; <?php echo the_date('Y'); ?> My Grocery</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
