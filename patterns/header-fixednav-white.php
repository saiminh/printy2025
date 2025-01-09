<?php
/**
 * Title: Header with fixed Navigation
 * Slug: printy2025/header-fixednav-white
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation, overlays the first page block with white font.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since printy2025 1.0
 */

 $langs_array = pll_the_languages( array( 'raw' => 1 ) );
?>
<!-- wp:group {
  "align":"full",
  "layout":{"type":"default"}
} -->
<div class="wp-block-group alignfull fixednav">
  
  <!-- wp:group {
    "layout":{"type":"constrained"}
  } -->
  <div class="wp-block-group">
    
    
    <!-- wp:group {
      "align":"wide",
      "layout":{
        "type":"flex",
        "flexWrap":"nowrap",
        "justifyContent":"space-between"
      }
    } -->
    <div class="wp-block-group alignwide">
    
      <!-- wp:image {
        "lightbox":{"enabled":false},
        "id":32,
        "width":"80px",
        "sizeSlug":"full",
        "linkDestination":"custom"
      } -->
      <figure class="wp-block-image size-full is-resized">
        <a href="/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/printy_logo_text_white.svg" alt="<?php esc_attr_e( 'Printy logo', 'printy2025' ); ?>" class="wp-image-32" style="width:80px"/>
        </a>
      </figure>
      <!-- /wp:image -->

      <!-- wp:group {
        "style":{
          "spacing":{
            "blockGap":"0"
          }
        },
        "layout":{
          "type":"flex",
          "flexWrap":"nowrap",
          "justifyContent":"left"
        }
      } -->
      <div class="wp-block-group">
        
        <!-- wp:navigation {
          "ref":4,
          "textColor":"base",
          "overlayTextColor":"contrast",
          "style":{
            "typography":{
              "fontStyle":"normal",
              "fontWeight":"500"
            }
          },
          "layout":{
            "type":"flex",
            "justifyContent":"left",
            "flexWrap":"wrap"
          }
        } /-->

        <!-- wp:paragraph { 
         "className" : "lang-switcher"
        } -->
        <p class="lang-switcher">
          <?php foreach ($langs_array as $lang) : ?>
            <a class="lang_<?php esc_html_e( $lang['slug']); ?>" href="<?php esc_html_e( $lang['url'] ); ?>"><?php esc_html_e( $lang['name'] ); ?></a>
          <?php endforeach; ?>
        </p>
        <!-- /wp:paragraph -->
  
      </div><!-- /wp:group -->

    </div><!-- /wp:group -->

  </div><!-- /wp:group -->

</div><!-- /wp:group -->
