<?php
/**
 * Title: Kopf mit grünem Raster
 * Slug: printy2025/hero-grid-small
 * Categories: banner
 * Description: Zur Beschreibung und Bewerbung der Seiteninhalte.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since printy2025 1.0
 */

?>
<!-- wp:columns {"metadata":{"name":"Kopf mit Rasterlayout"},"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"center","width":"60%","backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="flex-basis:60%"><!-- wp:group {"style":{"dimensions":{"minHeight":"50vh"},"spacing":{"padding":{"left":"var:preset|spacing|global-wide-size","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","top":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--global-wide-size)"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);letter-spacing:-0.01em"><strong>Druckvorbereitung</strong></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">Wählen Sie Ihr Format:</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"accent-1","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-1-color has-text-color has-link-color wp-element-button">Großformat</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"accent-1","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-1-color has-text-color has-link-color wp-element-button">Kleinformat</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"accent-1","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-1-color has-text-color has-link-color wp-element-button">Studienarbeit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:cover {"overlayColor":"accent-3","isUserOverlayColor":true,"minHeight":150,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:150px"><span aria-hidden="true" class="wp-block-cover__background has-accent-3-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"left":"var:preset|spacing|global-wide-size"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-left:var(--wp--preset--spacing--global-wide-size)"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"accent-1"} -->
<div class="wp-block-column has-accent-1-background-color has-background" style="flex-basis:40%"><!-- wp:spacer {"height":"20vh"} -->
<div style="height:20vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"accent-5"} -->
<div class="wp-block-column has-accent-5-background-color has-background"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/typewriter.webp","id":306,"dimRatio":0,"overlayColor":"accent-4","isUserOverlayColor":true,"focalPoint":{"x":0.28,"y":0.96},"minHeight":100,"minHeightUnit":"%","style":{"spacing":{"padding":{"right":"var:preset|spacing|global-wide-size","bottom":"var:preset|spacing|70"}},"color":{"duotone":["#000000","#0DB14B"]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="padding-right:var(--wp--preset--spacing--global-wide-size);padding-bottom:var(--wp--preset--spacing--70);min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-accent-4-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-306" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/typewriter.webp" style="object-position:28% 96%" data-object-fit="cover" data-object-position="28% 96%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Schreibe einen Titel…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->