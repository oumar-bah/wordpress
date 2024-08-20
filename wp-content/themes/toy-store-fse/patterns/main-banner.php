<?php

/**
 * Title: Header Media
 * Slug: toy-store-fse/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":65,"dimRatio":0,"customOverlayColor":"#7c6446","isUserOverlayColor":true,"minHeight":580,"className":"alignfull sliderimg","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover alignfull sliderimg" style="min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#7c6446"></span><img class="wp-block-cover__image-background wp-image-65" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content","layout":{"type":"constrained","contentSize":"40%","justifyContent":"left"}} -->
<div class="wp-block-group slider-content"><!-- wp:group {"className":"slider-text","layout":{"type":"constrained","contentSize":"70%","justifyContent":"center"}} -->
<div class="wp-block-group slider-text"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-bg-color","textColor":"foreground","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"}},"className":"slider-shot-head"} -->
<div class="wp-block-button has-custom-font-size slider-shot-head" style="font-size:18px;font-style:normal;font-weight:700"><a class="wp-block-button__link has-foreground-color has-secondary-bg-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px"><?php esc_html_e('Big Discount','toy-store-fse'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"35px","lineHeight":"1.3"}},"textColor":"foreground","className":"main-heading"} -->
<p class="has-text-align-left main-heading has-foreground-color has-text-color has-link-color" style="font-size:35px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Find The Best Toys','toy-store-fse'); ?><br><?php esc_html_e('For Your Kids','toy-store-fse'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","textColor":"background","style":{"border":{"radius":"13px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:13px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Shop Now','toy-store-fse'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->