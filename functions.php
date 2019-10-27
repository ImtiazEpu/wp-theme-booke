<?php
	if ( site_url() == "http://localhost/imtiaz" ) {
		define( "BOOKE_VERSION", time() );
	} else {
		define( "BOOKE_VERSION", wp_get_theme()->get( "Version" ) );
	}
	
	function booke_theme_setup() {
		load_theme_textdomain( 'booke', get_theme_file_path("/languages") );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( "custom-logo" );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-formats', [ "image", "gallery", "quote", "audio", "video", "link" ] );
		add_theme_support( "/assets/css/editor-style.css" );
		
		register_nav_menu( 'topmenu', __( 'Top Menu', 'booke' ) );
		register_nav_menu( 'footermenu', __( "Footer Middle Menu", "booke" ) );
	}
	
	add_action( 'after_setup_theme', 'booke_theme_setup' );
	
	function booke_assets() {
		/* Register CSS file
		====================*/
		wp_register_style( 'icomoon-css', get_theme_file_uri( 'assets/fonts/icomoon/style.css' ), null, BOOKE_VERSION );
		wp_register_style( 'bootstrap-css', get_theme_file_uri( 'assets/css/bootstrap.min.css' ), null, BOOKE_VERSION );
		wp_register_style( 'animate-css', get_theme_file_uri( 'assets/css/animate.css' ), null, BOOKE_VERSION );
		wp_register_style( 'carousel-css', get_theme_file_uri( 'assets/css/owl.carousel.min.css' ), null,
			BOOKE_VERSION );
		wp_register_style( 'owl-theme-css', get_theme_file_uri( 'assets/css/owl.theme.default.min.css' ), null,
			BOOKE_VERSION );
		wp_register_style( 'datepicker-css', get_theme_file_uri( 'assets/css/bootstrap-datepicker.css' ), null,
			BOOKE_VERSION );
		wp_register_style( 'flaticon-css', get_theme_file_uri( 'assets/fonts/flaticon/font/flaticon.css' ), null,
			BOOKE_VERSION );
		wp_register_style( 'aos-css', get_theme_file_uri( 'assets/css/aos.css' ), null, BOOKE_VERSION );
		wp_register_style( 'fancybox-css', get_theme_file_uri( 'assets/css/jquery.fancybox.min.css' ), null,
			BOOKE_VERSION );
		wp_register_style( 'style-css', get_theme_file_uri( 'assets/css/style.css' ), null, BOOKE_VERSION );
		wp_register_style( 'booke-css', get_stylesheet_uri(), null, BOOKE_VERSION );
		
		/*Enqueue CSS file
		================*/
		wp_enqueue_style( 'icomoon-css' );
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'animate-css' );
		wp_enqueue_style( 'carousel-css' );
		wp_enqueue_style( 'owl-theme-css' );
		wp_enqueue_style( 'datepicker-css' );
		wp_enqueue_style( 'flaticon-css' );
		wp_enqueue_style( 'aos-css' );
		wp_enqueue_style( 'fancybox-css' );
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'booke-css' );
		
		
		/* Register JS file
		====================*/
		wp_register_script( 'popper-js', get_theme_file_uri( 'assets/js/popper.min.js' ), array( 'jquery' ),
			BOOKE_VERSION,
			true );
		wp_register_script( 'bootstrap-js', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array( 'jquery' ),
			BOOKE_VERSION,
			true );
		wp_register_script( 'owl-carousel-js', get_theme_file_uri( 'assets/js/owl.carousel.min.js' ), array( 'jquery' ),
			BOOKE_VERSION, true );
		wp_register_script( 'aos-js', get_theme_file_uri( 'assets/js/aos.js' ), array( 'jquery' ), BOOKE_VERSION,
			true );
		wp_register_script( 'jquery-sticky-js', get_theme_file_uri( 'assets/js/jquery.sticky.js' ), array( 'jquery' ),
			BOOKE_VERSION,
			true );
		wp_register_script( 'stickyfill-js', get_theme_file_uri( 'assets/js/stickyfill.min.js' ), array( 'jquery' ),
			BOOKE_VERSION,
			true );
		wp_register_script( 'jquery-easing-js', get_theme_file_uri( 'assets/js/jquery.easing.1.3.js' ),
			array( 'jquery' ),
			BOOKE_VERSION, true );
		wp_register_script( 'isotope-pkgd-js', get_theme_file_uri( 'assets/js/isotope.pkgd.min.js' ), array( 'jquery' ),
			BOOKE_VERSION, true );
		wp_register_script( 'jquery-fancybox-js', get_theme_file_uri( 'assets/js/jquery.fancybox.min.js' ),
			array( 'jquery' ),
			BOOKE_VERSION, true );
		wp_register_script( 'main-js', get_theme_file_uri( 'assets/js/main.js' ), array( 'jquery' ), BOOKE_VERSION,
			true );
		
		/*Enqueue CSS file
		================*/
		
		wp_enqueue_script( 'popper-js' );
		wp_enqueue_script( 'bootstrap-js' );
		wp_enqueue_script( 'owl-carousel-js' );
		wp_enqueue_script( 'aos-js' );
		wp_enqueue_script( 'jquery-sticky-js' );
		wp_enqueue_script( 'stickyfill-js' );
		wp_enqueue_script( 'jquery-easing-js' );
		wp_enqueue_script( 'isotope-pkgd-js' );
		wp_enqueue_script( 'jquery-fancybox-js' );
		wp_enqueue_script( 'main-js' );
	}
	
	add_action( 'wp_enqueue_scripts', 'booke_assets' );
	
	
	/**
	 *
	 */
	function booke_widgets(){
		
		register_sidebar( array(
			'name'          => __( 'Footer Left Section', 'booke' ),
			'id'            => 'footer-left',
			'description'   => __( 'footer left section.', 'booke' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-heading mb-4">',
			'after_title'   => '</h3>',
		) );
		
		register_sidebar( array(
			'name'          => __( 'Footer Right Section', 'booke' ),
			'id'            => 'footer-right',
			'description'   => __( 'footer left section.', 'booke' ),
			'before_widget' => '<div id="%1$s" class="mb-5">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-heading mb-4">',
			'after_title'   => '</h3>',
		) );
		
		
		register_sidebar( array(
			'name'          => __( 'Footer Bottom Section', 'booke' ),
			'id'            => 'footer-bottom',
			'description'   => __( 'footer bottom section.', 'booke' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		) );
		
		
	}
	add_action('widgets_init','booke_widgets');