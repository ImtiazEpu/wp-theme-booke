<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booke Colorlib Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
	
	<?php wp_head();?>
</head>
<body <?php body_class();?> data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">
	
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div> <!-- .site-mobile-menu -->
	
	
	<div class="site-navbar-wrap">
		
		<div class="site-navbar site-navbar-target js-sticky-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-lg-3">
						<?php
							if (has_custom_logo()){
								the_custom_logo();
							}else{
								//echo '<h1 class="my-0 site-logo"><a href="' . home_url( "/" ) . ">" . get_bloginfo( 'name' ) . "</a></h1>"';
								echo '<h1 class="my-0 site-logo"><a href="' . home_url( '/' ) . '">' . get_bloginfo( "name" ) . '</a></h1>';

							}
						?>
						
					</div>
					<div class="col-6 col-lg-9">
						<?php get_template_part("template-parts/common/navigation")?>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- END .site-navbar-wrap -->
