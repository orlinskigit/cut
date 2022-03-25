<nav id="menu-overlay" class="closed">

	<div class="menu_content">
		
		<div class="contact_data">
			
		</div>

		<div class="menu_tree">

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>

		</div>

	</div>

</nav>