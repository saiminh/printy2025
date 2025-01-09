<?php
/**
 * printy 2025: Customise the admin
 *
 * @since printy2025 1.0
 */

/**
 * Removes comments from the admin menu and other changes to the admin area
 *
 * @since printy2025 1.0
 *
 * @return void
 */

 // Remove comments
function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );

// Remove comments from menu
function prefix_remove_comments_tl() {
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'prefix_remove_comments_tl' );

// Allow SVG files
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// customize admin bar css
function printy_override_admin_bar_css() { 
  if ( is_admin_bar_showing() ) { ?>

    <style type="text/css">
      .interface-interface-skeleton__secondary-sidebar + .interface-interface-skeleton__content .editor-styles-wrapper {
        --wp--preset--spacing--global-wide-size: clamp(clamp(30px, 5vw, 50px), calc( (100% - 1100px) / 2  ), 100%);
      }
      .interface-interface-skeleton__content:has( + .interface-interface-skeleton__sidebar div) .editor-styles-wrapper{
        --wp--preset--spacing--global-wide-size: clamp(clamp(30px, 5vw, 50px), calc( (100% - 1100px) / 2  ), 100%);
      }
    </style>
  <?php }
}

// on backend area
add_action( 'admin_head', 'printy_override_admin_bar_css' );
// on frontend area
// add_action( 'wp_head', 'printy_override_admin_bar_css' );