<nav class="site-navigation text-right" role="navigation">
	<div class="container">
		
		<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 "><a href="#" class="site-menu-toggle js-menu-toggle text-black">
				<span class="icon-menu h3"></span>
			</a></div>
		
		<!--<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
			<li><a href="#home-section" class="nav-link">Home</a></li>
			<li><a href="#features-section" class="nav-link">Features</a></li>
			<li><a href="#about-section" class="nav-link">About Author</a></li>
			<li><a href="#testimonial-section" class="nav-link">Testimonial</a></li>
			<li><a href="#contact-section" class="nav-link">Contact</a></li>
		</ul>-->
		<?php
			wp_nav_menu( array(
				'theme_location' => 'topmenu',
				'menu_id'        => 'topmenu',
				'menu_class'     => 'site-menu main-menu js-clone-nav d-none d-lg-block'
			) )
		?>
	</div>
</nav>