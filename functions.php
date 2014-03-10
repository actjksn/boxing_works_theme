<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function bw_widget_init() {
	// Front-page carousel widget area
	register_sidebar( array(
		'name' => __('Caorusel Area', 'wpb'),
		'id'	 => 'carousel-marketing',
		'description' => __( 'The carousel appears only on the front page', 'wpb' ),
		'before_widget' => '<div class="test">',
		'after_widget'  => '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title'  	=> '</h3>',
		)
	);
}
add_action('widgets_init', 'bw_widget_init');

/**
 * Create widgets.
 *
 */
