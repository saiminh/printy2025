<?php
/**
 * printy2025 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since printy2025 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'printy2025_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since printy2025 1.0
	 *
	 * @return void
	 */
	function printy2025_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'printy2025_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'printy2025_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since printy2025 1.0
	 *
	 * @return void
	 */
	function printy2025_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'printy2025_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'printy2025_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since printy2025 1.0
	 *
	 * @return void
	 */
	function printy2025_enqueue_styles() {
		wp_enqueue_style(
			'printy2025-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'printy2025_enqueue_styles' );

// Enqueues script.js and makes it deferred.
if ( ! function_exists( 'printy2025_enqueue_scripts' ) ) :
  /**
   * Enqueues script.js and makes it deferred.
   *
   * @since printy2025 1.0
   *
   * @return void
   */
  function printy2025_enqueue_scripts() {
    wp_enqueue_script(
      'printy2025-script',
      get_parent_theme_file_uri( 'js/scripts.min.js' ),
      array(),
      wp_get_theme()->get( 'Version' ),
      true // Enqueue the script in the footer.
    );
  }
endif;
add_action( 'wp_enqueue_scripts', 'printy2025_enqueue_scripts' );

// Registers custom block styles.
if ( ! function_exists( 'printy2025_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since printy2025 1.0
	 *
	 * @return void
	 */
	function printy2025_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'printy2025' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'printy2025_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'printy2025_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since printy2025 1.0
	 *
	 * @return void
	 */
	function printy2025_pattern_categories() {

		register_block_pattern_category(
			'printy2025_page',
			array(
				'label'       => __( 'Pages', 'printy2025' ),
				'description' => __( 'A collection of full page layouts.', 'printy2025' ),
			)
		);

		register_block_pattern_category(
			'printy2025_post-format',
			array(
				'label'       => __( 'Post formats', 'printy2025' ),
				'description' => __( 'A collection of post format patterns.', 'printy2025' ),
			)
		);
	}
endif;
add_action( 'init', 'printy2025_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'printy2025_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since printy2025 1.0
	 *
	 * @return void
	 */
	function printy2025_register_block_bindings() {
		register_block_bindings_source(
			'printy2025/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'printy2025' ),
				'get_value_callback' => 'printy2025_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'printy2025_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'printy2025_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since printy2025 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function printy2025_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;

// Remove Posts as we don't need them atm
function post_remove () { 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove'); 

// Customise admin area
require get_template_directory() . '/inc/customise_admin.php';

// Defer JS to improve page load speed
require get_template_directory() . '/inc/defer_js.php';

// Custom image sizes
require get_template_directory() . '/inc/custom_img_sizes.php';

// Load theme text domain for translations
function printy2025_load_theme_textdomain() {
    load_theme_textdomain('printy2025', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'printy2025_load_theme_textdomain');

add_post_type_support( 'page', 'excerpt' );