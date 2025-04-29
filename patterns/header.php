<?php
/**
 * Title: Navigationsleiste
 * Slug: printy2025/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation, overlays the first page block.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since printy2025 1.0
 */

?>
<!-- wp:group {"align":"full","className":"fixednav","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"accent-1","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fixednav has-base-color has-accent-1-background-color has-text-color has-background has-link-color">
  
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
        
        <!-- wp:group {"metadata":{"name":"Navigation DE"},"className":"navigation_german","layout":{"type":"constrained"}} -->
        <div class="wp-block-group navigation_german">
          
          <!-- wp:navigation {"ref":1239} /-->
        
        </div><!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Navigation ENG"},"className":"navigation_english","layout":{"type":"constrained"}} -->
        <div class="wp-block-group navigation_english">
          
          <!-- wp:navigation {"ref":1239,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /-->
        
        </div><!-- /wp:group -->

        <!-- wp:outermost/icon-block {"iconName":"","linkUrl":"#search"} -->
          <div class="wp-block-outermost-icon-block">
            <a class="icon-container" href="#search" style="width:48px">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:.85em;height:.85em;z-index:10;fill:currentColor;padding:0 1rem">
                <path d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.14583 12.3708 1.8875 11.1125C0.629167 9.85417 0 8.31667 0 6.5C0 4.68333 0.629167 3.14583 1.8875 1.8875C3.14583 0.629167 4.68333 0 6.5 0C8.31667 0 9.85417 0.629167 11.1125 1.8875C12.3708 3.14583 13 4.68333 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.8125 10.5625 9.6875 9.6875C10.5625 8.8125 11 7.75 11 6.5C11 5.25 10.5625 4.1875 9.6875 3.3125C8.8125 2.4375 7.75 2 6.5 2C5.25 2 4.1875 2.4375 3.3125 3.3125C2.4375 4.1875 2 5.25 2 6.5C2 7.75 2.4375 8.8125 3.3125 9.6875C4.1875 10.5625 5.25 11 6.5 11Z" fill="currentColor"></path>
              </svg>
            </a>
          </div>
        <!-- /wp:outermost/icon-block -->
        
        <!-- wp:create-block/sprachenswitcher /-->

      </div><!-- /wp:group -->
      
    </div><!-- /wp:group -->
    
  </div><!-- /wp:group -->
  
</div><!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div id="search" class="wp-block-group">
  <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"no-button","placeholder":"<?php echo esc_attr_x( 'Search...', 'Search input field placeholder text.', 'printy2025' ); ?>"} /-->
</div>
<!-- /wp:group -->