<?php

function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists(STYLESHEETPATH . "/blocks/" . $slug . "/template.php") ) {
		include( STYLESHEETPATH . "/blocks/" . $slug . "/template.php" );
	}
}