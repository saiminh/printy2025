<?php
/**
 * Printy 2025: Defer JS
 *
 * @since printy 2025 1.0
 */

/**
 * Tells certain scripts to defer
 *
 * @since printy 2025 1.0
 *
 * @return void
 */

 function defer_all_scripts( $tag, $handle, $src ) {
  // Do not defer jQuery or scripts in the admin area
  if ( is_admin() || strpos( $handle, 'jquery' ) !== false ) {
      return $tag;
  }

  return str_replace( ' src', ' defer="defer" src', $tag );
}
add_filter( 'script_loader_tag', 'defer_all_scripts', 10, 3 );
