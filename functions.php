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
		'name' => __('Carousel Area', 'wpb'),
		'id'	 => 'carousel-marketing',
		'description' => __( 'The carousel appears only on the front page', 'wpb' ),
		'before_widget' => '<div class="item">',
		'after_widget'  => '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title'  	=> '</h3>',
		)
	);

	register_sidebar( array(
		'name' => __('Instagram Gallery', 'wpb'),
		'id'	 => 'instagram-gallery',
		'description' => __( 'Sidebar for Instagram gallery', 'wpb' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title'  	=> '</h3>',
		)
	);	

	register_sidebar( array(
		'name' => __('Instructors Listing', 'wpb'),
		'id'	 => 'instructors',
		'description' => __( 'Post some short bios of our instructors here.', 'wpb' ),
		'before_widget' => '<div class="col-sm-12 col-md-6">',
		'after_widget'  => '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title'  	=> '</h3>',
		)
	);	
}
add_action('widgets_init', 'bw_widget_init');

function register_menus() {
	register_nav_menu('navigation-menu', __('Navigation Menu'));
}
add_action('init', 'register_menus');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	$title = (get_the_title($post));
	// This conditional accounts for pages...
    if(!is_front_page() && $item->title == $title){ 
        $classes[] = "active";
     } elseif (is_front_page() && $item->title == "Home") {
     	$classes[] = "active";
     }
     return $classes;
}

function custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function count_widgets($sidebar_id) {
	$sidebars = wp_get_sidebars_widgets();
	$counter  = $sidebars[$sidebar_id];

	$total = count($counter);
	return $total;
}

if ( class_exists('Simple_Image_Widget') ) {
	class Slide_Widget extends Simple_Image_Widget {
		/**
		 * Setup widget options.
		 */
		function __construct() {
			$widget_options = wp_parse_args( $widget_options, array(
					'classname' => 'widget_slide',
					'description' => 'Add a slide to the homepage slider'
					) );

			parent::__construct( 'slide', 'Slide', $widget_options );
		}

		function widget( $args, $instance ) {
			// Copy the original title so it can be passed to hooks.
			$instance['title_raw'] = $instance['title'];
			$instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

			// Copy the original text so it can be passed to hooks.
			$instance['text_raw'] = $instance['text'];
			$instance['text'] = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance, $this->id_base );

			// Start building the output.
			$output = '';

			// Make sure the image ID is a valid attachment.
			if ( ! empty( $instance['image_id'] ) ) {
				$image = get_post( $instance['image_id'] );
				if ( ! $image || 'attachment' != get_post_type( $image ) ) {
					$output = '<!-- Image Widget Error: Invalid Attachment ID -->';
				}
			}

			if ( empty( $output ) ) {
				$output = $this->render( $args, $instance );
			}

			echo $output;
		}	

		function render ( $args, $instance ) {
			$instance['link_open'] = '';
			$instance['link_close'] = '';
			if ( ! empty ( $instance['link'] ) ) {
				$target = ( empty( $instance['new_window'] ) ) ? '' : ' target="_blank"';
				//$instance['link_open'] = '<a href="' . esc_url( $instance['link'] ) . '"' . $target . '>';
				$instance['link_open'] = '<a href="' . esc_url( $instance['link'] ) . '"' . '>';
				$instance['link_close'] = '</a>';
				$link = $instance['link_open'] . $instance['link_close'];
			}

			$output = $args['before_widget'];
				// Allow custom output to override the default HTML.
				if ( $inside = apply_filters( 'simple_image_widget_output', '', $args, $instance, $this->id_base ) ) {
					$output .= $inside;
				} else {
					

					// Add the image.
					if ( ! empty( $instance['image_id'] ) ) {			
						$image_size = ( ! empty( $instance['image_size'] ) ) ? $instance['image_size'] : apply_filters( 'simple_image_widget_output_default_size', 'medium', $this->id_base );
						
						$default_attr = array(
							'class' => 'img-responsive',
							'alt'   => trim(strip_tags( get_post_meta($attachment_id, '_wp_attachment_image_alt', true) )),
						);
						
						$output .= sprintf( '%s%s%s',
							$instance['link_open'],
							wp_get_attachment_image( $instance['image_id'], $image_size, 0, $default_attr ),
							$instance['link_close']
						);
					} elseif ( ! empty( $instance['image'] ) ) {
						// Legacy output.
						$output .= sprintf( '%s<img src="%s" alt="%s">%s',
							$instance['link_open'],
							esc_url( $instance['image'] ),
							( empty( $instance['alt'] ) ) ? '' : esc_attr( $instance['alt'] ),
							$instance['link_close']
						);
					}

					// Add the text.
					if ( ! empty( $instance['text'] ) ) {
						$title .= ( empty( $instance['title'] ) ) ? '' : $args['before_title']. $instance['title'] . $args['after_title'];
						$link = '<a class="btn btn-primary" href="' . esc_url( $instance['link'] ) . '"' . '>' . $instance['link_text'] . $instance['link_close'];
						$content = $instance['text'] . '<p class="more">' . $link . "</p>";
						$output .= '<div class="carousel-caption">' . $title . apply_filters( 'the_content', $instance['text'] ) . $link . '</div>';
					}

					// Add a more link.
					/*
					if ( ! empty( $instance['link_open'] ) && ! empty( $instance['link_text'] ) ) {
						$output .= '<p class="more">' . $instance['link_open'] . $instance['link_text'] . $instance['link_close'] . '</p>';
					}
					*/
				}

			$output .= $args['after_widget'];

			return $output;
		}		
	}

	function load_widgets_slider() {
			register_widget( 'Slide_Widget' );
	}

	add_action( 'widgets_init', 'load_widgets_slider' );
}

add_theme_support( 'post-thumbnails' );