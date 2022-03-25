<?php

/* 

https://rudrastyh.com/gutenberg/remove-default-blocks.html

https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/

*/

//add_theme_support("align-wide");

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );
 
function misha_allowed_block_types( $allowed_blocks ) {
 
	$allow = array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list'
	);

	foreach(glob(get_template_directory()."/blocks/*") as $file){

		$allow[] = "acf/" . basename($file);

	}

	return $allowed_blocks;
 
}


add_action('admin_head', 'correct_editor_width');

function correct_editor_width() {
  echo '<style>
    .wp-block {
    	max-width: 1000px !important;
    }
  </style>';
}