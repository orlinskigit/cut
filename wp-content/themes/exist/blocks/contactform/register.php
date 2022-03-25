<?php

add_action('acf/init', 'register_block_contactform');

function register_block_contactform() {
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'contactform',
			'title'				=> __('Formularz kontaktowy'),
			'description'		=> __('Formularz kontaktowy'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'render_template'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'email-alt',
			'align' 			=> 'full',
			'supports' 			=> array('mode' => false, 'align' => false),
			'mode'				=> 'edit',
			'keywords'			=> array( 'contact','form','formularz','kontaktowy'),
		));
	}
}