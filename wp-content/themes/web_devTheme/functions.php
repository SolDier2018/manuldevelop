<?php

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php' );
require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php' );

function web_dev_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'web_dev' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}

add_action( 'after_setup_theme', 'web_dev_setup' );

function web_dev_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'web_dev' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'web_dev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'web_dev_widgets_init' );

function web_dev_style() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('fonts-aweson', get_template_directory_uri() . '/css/font-awesome.css', array());
	wp_enqueue_style('simple-line-icons', get_template_directory_uri() . '/css/simple-line-icons.css', array());
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_style('font','https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic');
	wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic');
	wp_enqueue_style( 'web_dev-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'web_dev_style' );

function web_dev_scripts() {
	wp_enqueue_script('modernizr.custom', get_template_directory_uri() . '/js/modernizr.custom.js');
	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', "true");
	wp_enqueue_script('jquery.parallax-1.1.3', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array('jquery'), '', "true");
	wp_enqueue_script('imagesloaded.pkgd', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array('jquery'), '', "true");
	wp_enqueue_script('jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), '', "true");
	//wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery'), '', "true");
	wp_enqueue_script('wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '', "true");
	wp_enqueue_script('jquery.easypiechart', get_template_directory_uri() . '/js/jquery.easypiechart.js', array('jquery'), '', "true");
	wp_enqueue_script('waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '', "true");
	wp_enqueue_script('jquery.cbpQTRotator', get_template_directory_uri() . '/js/jquery.cbpQTRotator.js', array('jquery'), '', "true");
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', "true");

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'web_dev_scripts' );

show_admin_bar(false);




