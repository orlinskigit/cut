<?php

add_action('wp', 'disableFooterModulePage');
add_filter('display_post_states', 'wpse240081_custom_post_states', 10, 2);

function wpse240081_custom_post_states($states, $post)
{

	if ($post->ID == get_field('footer_page_modules', 'option')) {

		$states[] = __('Moduły stopki');
	}

	return $states;
}
function disableFooterModulePage()
{

	$id = get_the_ID();

	if (is_page()) {
		if (get_the_ID() == get_field('footer_page_modules', 'option')) {
			wp_redirect(home_url());
			exit();
		}
	}
}
