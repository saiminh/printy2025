<?php
/**
 * Printy 2025: Custom Image Sizes
 *
 * @since Printy 2025 1.0
 */

/**
 * Registers custom image sizes.
 *
 * @since Printy 2025 1.0
 *
 * @return void
 */

//------------------------
// Responsive image sizes
//------------------------

add_theme_support( 'post-thumbnails' );

function add_image_sizes() {
  add_image_size( 'full-screen-width', 1875, 1875, false );
  add_image_size( 'half-screen-width', 1500, 1500, false );
  add_image_size( 'third-screen-width', 1125, 1125, false );
  add_image_size( '950', 950, 950, false );
  add_image_size( '850', 850, 850, false );
  add_image_size( 'quarter-screen-width', 750, 750, false );
  add_image_size( '650', 650, 650, false );
  add_image_size( '16-percent-screen-width', 450, 450, false );
  add_image_size( '320', 320, 320, false );
}
add_action('after_setup_theme', 'add_image_sizes');

function formo_custom_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'half-screen-width' => __( 'Half Screen width' ),
    'third-screen-width' => __( 'Third Screen width' ),
    'quarter-screen-width' => __( 'Quarter Screen width' ),
    '16-percent-screen-width' => __( '16% Screen width' ),
    ) );
}
add_filter( 'image_size_names_choose', 'formo_custom_sizes' );

function my_content_image_sizes_attr( $sizes, $size ) {
    $width = $size[0];
    
    if ( $width === 1875 ) { //half
      $sizes = '100vw';
    }
    if ( $width === 1500 ) { //half
      $sizes = '(min-width: 782px) 47vw, 95vw';
    }
    if ( $width === 1125 ) { //33%
      $sizes = '(min-width: 782px) 33vw, 95vw';
    }
    if ( $width === 750) { //24%
      $sizes = '(min-width: 782px) 24vw, 95vw';
    }
    if ( $width === 450) { //16%
      $sizes = '(min-width: 782px) 16vw, 95vw';
    }
      
  return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'my_content_image_sizes_attr', 10, 5 );