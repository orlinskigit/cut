<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exist
 */
?>

<article class="news" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="flexer">

		<div class="image">

			<?php exist_post_thumbnail(); ?>

		</div>

		<div class="entry-content">

			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				
				the_time('<p class="data">'.the_time("j/m/y").'</p>');
			endif;

			the_content(sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'exist'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'exist'),
				'after'  => '</div>',
			));
			?>
		</div>
	</div>
</article>