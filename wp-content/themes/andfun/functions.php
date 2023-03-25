<?php
/*
 *
 * Register Styles and Scripts
 *
 */
function my_styles() {
    wp_enqueue_style( 'my-styles', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

function my_scripts() {
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');
    wp_enqueue_script( 'menu-scripts', get_template_directory_uri() . '/assets/js/menu.js');
    wp_enqueue_script( 'scroll-scripts', get_template_directory_uri() . '/assets/js/scroll.js');
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// Remove Fluent Forms CSS styles.
add_action( 'wp_enqueue_scripts', function () {

	wp_deregister_style( 'fluentform-public-default' );
	wp_dequeue_style( 'fluentform-public-default' );
}, 1000 );

/*
 * Display confirmation message and form after successful submission.
 *
 * @link  https://wpforms.com/developers/how-to-display-the-confirmation-and-the-form-again-after-submission/
 *
 */
  
function wpf_dev_frontend_output_success(  $form_data, $fields, $entry_id ) {
       
    // Optional, you can limit to specific forms. Below, we restrict output to form #235.
    if ( absint( $form_data[ 'id' ] ) !== 13 ) {
        return;
    }
	// Reset the fields to blank
	unset(
		$_GET[ 'wpforms_return' ],
		$_POST[ 'wpforms' ][ 'id' ]
	);
 
	// Uncomment this line out if you want to clear the form field values after submission
	unset( $_POST[ 'wpforms' ][ 'fields' ] );

	// Actually render the form.
	wpforms()->frontend->output( $form_data[ 'id' ] );
}
 
add_action( 'wpforms_frontend_output_success', 'wpf_dev_frontend_output_success', 10, 3 );

add_theme_support('post-thumbnails');
add_post_type_support( 'destinations', 'thumbnail' );

function destination_custom_post_type() {
	register_post_type('destinations',
		array(
			'labels'      => array(
				'name'          => 'Destinations',
				'singular_name' => 'Destination',
			),
				'public'      => true,
				'has_archive' => true,
				'supports' => array('custom-fields'),
				'hierachical' => false,
				'menu_icon' => 'dashicons-location'
		)
	);
}
add_action('init', 'destination_custom_post_type');

function my_register_taxonomy_destination() {
	$labels = array(
		'name'              => 'Devisions',
		'singular_name'     => 'Devision',
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'public' => true
	);
	register_taxonomy( 'devision', [ 'destinations' ], $args );
}

add_action( 'init', 'my_register_taxonomy_destination' );

add_action( 'init', function() {
	remove_post_type_support( 'destinations', 'editor' );
	remove_post_type_support( 'destinations', 'title' );
}, 99);

?>