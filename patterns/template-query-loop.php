<?php
/**
 * Title: List of posts, 1 column
 * Slug: printy2025/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since printy2025 1.0
 */

?>
<!-- wp:query {"queryId":17,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
    
    <!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
  
    <!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile">
      
    <!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"border":{"radius":"100%"}}} /--></div>
    <!-- /wp:column -->
  
    <!-- wp:column {"width":"80%"} -->
    <div class="wp-block-column" style="flex-basis:80%">
      
      <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
    
      <!-- wp:post-excerpt {"moreText":"","excerptLength":38,"fontSize":"medium"} /-->
    
      <!-- wp:read-more {"content":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"width":"1px","color":"#0DB14B","radius":"1rem"}},"textColor":"accent-1","fontSize":"medium"} /-->
    
    </div>
    <!-- /wp:column -->
  
</div>
  <!-- /wp:columns -->
  <!-- /wp:post-template -->
  
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    
    <!-- wp:query-no-results {"align":"full"} -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}},"border":{"radius":"1rem"}},"backgroundColor":"accent-4","textColor":"accent-5"} -->
    <p class="has-text-align-left has-accent-5-color has-accent-4-background-color has-text-color has-background has-link-color" style="border-radius:1rem"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'printy2025' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- /wp:query-no-results -->
  
  </div>
  <!-- /wp:group -->
  
  <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
  <!-- wp:query-pagination-previous /-->
  
  <!-- wp:query-pagination-numbers /-->
  
  <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination --></div>
  <!-- /wp:group --></div>
  <!-- /wp:query -->
