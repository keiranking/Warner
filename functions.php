<?php
// Add scripts and stylesheets
function kk_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js');
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
  wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js');
}

add_action( 'wp_enqueue_scripts', 'kk_scripts' );

// Add Google Fonts
function kk_google_fonts() {
  wp_register_style('Merriweather', 'http://fonts.googleapis.com/css?family=Merriweather:300,300italic');
  wp_enqueue_style( 'Merriweather');
  wp_register_style('Roboto', 'http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,500');
  wp_enqueue_style( 'Roboto');
		}

add_action('wp_print_styles', 'kk_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );
// Featured Images
add_theme_support( 'post-thumbnails' );

// Add featured image sizes
add_image_size( 'design-thumbnail', 240, 135, true ); // width, height, crop

// Register the new image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'kk_custom_sizes' );
function kk_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'design-thumbnail' => __( 'Design Thumbnail' )
    ) );
}

// add_filter( 'use_default_gallery_style', '__return_false' );

/* Calculate how long the post would take to read, in whole minutes */
function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    return round( str_word_count( strip_tags( $content ) ) / 166 );
}
