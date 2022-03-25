<nav id="menu-standard">

	<?php
	wp_nav_menu(array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		'walker'        => new NOA_Walker()
	));
	?>


</nav>


<nav id="menu-mobile">


	<button id="hamburger" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expended="false" aria-label="Toogle Menu">

		<div id="nav-icon">
			<span></span>
			<span></span>
			<span></span>
		</div>

	</button>


	<?php
	wp_nav_menu(array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'mobile-menu',
		'menu_class' => 'collapse',
		'walker'         => new Bootstrap_NavWalker(),
		'fallback_cb'    => 'Bootstrap_NavWalker::fallback'
	));
	?>


</nav>