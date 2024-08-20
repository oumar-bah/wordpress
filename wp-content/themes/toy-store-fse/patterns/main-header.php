<?php
 /**
  * Title: Main Header
  * Slug: toy-store-fse/main-header
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"foreground","layout":{"type":"default"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"className":"top-header","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group top-header"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"top-info-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-info-box"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":45,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/phone.png' ); ?>" alt="" class="wp-image-45"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg-color"}}},"typography":{"fontSize":"13px"}},"textColor":"secondary-bg-color"} -->
<p class="has-secondary-bg-color-color has-text-color has-link-color" style="font-size:13px"><?php esc_html_e('Call Us:','toy-store-fse'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<p class="has-background-color has-text-color has-link-color" style="font-size:13px"><?php esc_html_e('123456789','toy-store-fse'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":45,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/envelope.png' ); ?>" alt="" class="wp-image-45"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg-color"}}},"typography":{"fontSize":"13px"}},"textColor":"secondary-bg-color"} -->
<p class="has-secondary-bg-color-color has-text-color has-link-color" style="font-size:13px"><?php esc_html_e('Mail Us:','toy-store-fse'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<p class="has-background-color has-text-color has-link-color" style="font-size:13px"><?php esc_html_e('info@example.com','toy-store-fse'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"top-social"} -->
<div class="wp-block-column is-vertically-aligned-center top-social"><!-- wp:social-links {"iconColor":"secondary-bg-color","iconColorValue":"#FAB600","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"secondary-bg-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"lower-header","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group lower-header" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo "} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"22px"}},"textColor":"foreground"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-nav"} -->
<div class="wp-block-column is-vertically-aligned-center header-nav" style="flex-basis:60%"><!-- wp:navigation {"textColor":"foreground","overlayBackgroundColor":"foreground","overlayTextColor":"background","className":"head-menu-right","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-search"} -->
<div class="wp-block-column is-vertically-aligned-center header-search" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/wishlist.png' ); ?>" alt="" class="wp-image-28"/></figure>
<!-- /wp:image -->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"10px"}}} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","iconColor":{"slug":"foreground","color":"#3D4058","name":"Foreground","class":"has-foreground-icon-color"},"style":{"typography":{"fontSize":"10px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->