<?php

add_action( 'wp_ajax_test', 'jj_get_cookie_information'); 
add_action( 'wp_ajax_nopriv_test', 'jj_get_cookie_information');  

function jj_get_cookie_information(){  
  
	$data = array();
 
  	$data['cookies_text'] 			= 	get_field("cookies_text", "options");
  	$data['cookies_button_label'] 	= 	get_field("cookies_button_label", "options");

  	echo json_encode($data);

  die();

}  


?>