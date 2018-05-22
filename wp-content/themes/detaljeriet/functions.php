<?php

function detaljeriet_script_enqueue() {
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/detaljeriet.js', array( 'jquery'), '1.0', true);
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/detaljeriet.css', array(), '1.0.0', 'all');
	wp_enqueue_style('googlefont', '//fonts.googleapis.com/css?family=Montserrat:400,500,600,700 ');
	// if(is_page('Kontakt'))
	// 	wp_enqueue_script('googlemap', '//maps.googleapis.com/maps/api/js?key=AIzaSyAv8cYQy0HglTGjEF9oYhjzJBZTNIwf8DE&callback=initMap','', '', true);
}

add_action('wp_enqueue_scripts', 'detaljeriet_script_enqueue');

function detaljeriet_theme_setup(){

	add_theme_support('menus');

}
add_action('after_setup_theme', 'detaljeriet_theme_setup');


function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'project' )
      ),
      'public' => true,
      'has_archive' => true,
	'rewrite' => array('slug' => 'portfolio'),
	'supports' => array('title', 'editor',  'thumbnail')
    )
  );
}
add_action( 'init', 'create_post_type' );


//remove_filter('the_content', 'wpautop'); //remove the auotmatic <p> in wordpress
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_image_size( 'auto', 9999, 9999);

add_filter('show_admin_bar', '__return_false');


add_action('send_headers', function(){
    // Enforce the use of HTTPS
	header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
	// Prevent Clickjacking
	header("X-Frame-Options: SAMEORIGIN");
	// Prevent XSS Attack
	//header("Content-Security-Policy: default-src https: 'unsafe-inline' 'unsafe-eval';"); // FF 23+ Chrome 25+ Safari 7+ Opera 19+
	//header("X-Content-Security-Policy: default-src https: 'unsafe-inline' 'unsafe-eval' https:;"); // IE 10+
	// Block Access If XSS Attack Is Suspected
	header("X-XSS-Protection: 1; mode=block");
	// Prevent MIME-Type Sniffing
	header("X-Content-Type-Options: nosniff");
	// Referrer Policy
	header("Referrer-Policy: no-referrer-when-downgrade");
}, 1);


?>
