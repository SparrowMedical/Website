<?php
/**
 * Title: Contrasting Information Panel
 * Slug: riker/contrasting-information-panel
 * Categories: featured
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Contrasting Information Panel', 'riker' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"><?php esc_html_e( 'This is a heading to focus attention on this section', 'riker' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
<p class="has-text-align-center has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipiscing elit eget lacinia, aliquam etiam tellus placerat duis convallis pulvinar augue habitant, et nibh torquent senectus interdum lacus sagittis. Dis elementum parturient risus metus accumsan euismod libero.', 'riker' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3em"} -->
<div style="height:3em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":"11px"}},"backgroundColor":"contrast-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-contrast-2-background-color has-background" style="border-radius:11px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","linkDestination":"none"} -->
<figure class="wp-block-image alignright"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/blocks.png'; ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'A sub heading here', 'riker' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
<p class="has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipiscing elit vestibulum diam lacinia elementum ornare rutrum nascetur nulla, sem justo pellentesque per convallis ligula suscipit lobortis leo euismod montes aptent quis lectus. Litora ultricies a fringilla commodo magna himenaeos purus, convallis mollis volutpat iaculis gravida ad, hendrerit vitae quam mattis fermentum nam.', 'riker' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"contrast-3","className":"is-style-fading"} -->
<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-fading"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"accent","fontSize":"large"} -->
<p class="has-accent-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '2,000', 'riker' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
<p class="has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'Happy clients', 'riker' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"accent","fontSize":"large"} -->
<p class="has-accent-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '20m+', 'riker' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3"} -->
<p class="has-base-3-color has-text-color has-link-color"><?php esc_html_e( 'Visitors securely served', 'riker' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->