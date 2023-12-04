<?php
/**
 * Title: Image and Text with Contrast Background
 * Slug: riker/image-text-contrast-background
 * Categories: featured
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Image and Text with Contrast Background', 'riker' ); ?>"},"align":"full","backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background"><!-- wp:media-text {"mediaLink":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/blocks.png'; ?>","mediaType":"image"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/blocks.png'; ?>" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"1.2em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'What can we do', 'riker' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textColor":"base","fontSize":"x-large","fontFamily":"caveat"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-caveat-font-family has-x-large-font-size"><?php esc_html_e( 'for you?', 'riker' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color"><?php esc_html_e( 'Class eleifend ridiculus turpis quisque nibh per ultrices porta nunc malesuada, fusce leo ut neque tortor vestibulum integer tempus consequat laoreet, auctor viverra aptent litora non quis fringilla dictum risus.', 'riker' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get In Touch →', 'riker' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
