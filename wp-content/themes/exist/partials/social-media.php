<div id="social-media-fixed">

	<?php if(get_field('facebook_url', 'option') != "") {?>

		<a href="<?= get_field('facebook_url', 'option'); ?>" target="_blank" title="Facebook"><img src="<?= get_template_directory_uri(); ?>/images/social_media/fb.svg" class="fb" /></a>

	<?php } ?>

	<?php if(get_field('instagram_url', 'option') != "") {?>

		<a href="<?= get_field('instagram_url', 'option'); ?>" target="_blank" title="Instagram"><img src="<?= get_template_directory_uri(); ?>/images/social_media/instagram.svg" class="instagram" /></a>

	<?php } ?>
		
	<?php if(get_field('youtube_url', 'option') != "") {?>

		<a href="<?= get_field('youtube_url', 'option'); ?>" target="_blank" title="YouTube"><img src="<?= get_template_directory_uri(); ?>/images/social_media/youtube.svg" class="youtube" /></a>

	<?php } ?>

</div>