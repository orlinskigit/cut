<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exist
 */

?>

<?php wp_footer(); ?>
 

<?php

if ($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "localhost:82" || $_SERVER['HTTP_HOST'] == "192.168.0.104") {
	echo '<script src="//localhost:35729/livereload.js"></script>';
}

?>

</body>

</html>