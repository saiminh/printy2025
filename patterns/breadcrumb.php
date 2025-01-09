<?php
/**
 * Title: Breadcrumb
 * Slug: printy2025/breadcrumb
 * Categories: text
 * Description: Ancestors of the current page.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since printy2025 1.0
 */

 $ancestors = get_post_ancestors( get_the_ID() );
?>

<!-- wp:list {"className":"breadcrumb-nav"} -->
<ul class="wp-block-list breadcrumb-nav">

  <?php if ( ! empty( $ancestors ) ) : ?>
    <?php foreach ( $ancestors as $ancestor ) : ?>
    <!-- wp:list-item -->
    <li><a href="<?php echo esc_url( get_permalink( $ancestor ) ); ?>"><?php echo esc_html( get_the_title( $ancestor ) ); ?></a></li>
    <!-- /wp:list-item -->
    <?php endforeach; ?>
  <?php else : ?>
    <!-- wp:list-item -->
    <li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( get_the_ID() ); ?></a></li>
    <!-- /wp:list-item -->
  <?php endif; ?>

</ul>
<!-- /wp:list -->