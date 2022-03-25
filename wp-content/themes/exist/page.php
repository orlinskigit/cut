<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exist
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :

			the_post();
			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.

		if (get_field('footer_modules_off') != 1) {

			$id 			= 	get_field('footer_page_modules', 'option');
			$the_query 		= 	new WP_Query('page_id=' . $id);

			if ($id != "") {

				while ($the_query->have_posts()) : $the_query->the_post();

					get_template_part('template-parts/content', 'page');

				endwhile;

				wp_reset_query();
			}
		}


		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
