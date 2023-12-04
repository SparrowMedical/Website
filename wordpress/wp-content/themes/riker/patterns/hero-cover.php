<?php
/**
 * Title: Hero Cover
 * Slug: riker/hero-cover
 * Categories: featured
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero Cover', 'riker' ); ?>"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/hero.jpg'; ?>","dimRatio":50,"overlayColor":"contrast","focalPoint":{"x":0.5,"y":0.4},"isDark":false,"align":"full","className":"is-style-hover-zoom-in","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull is-light is-style-hover-zoom-in" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/hero.jpg'; ?>" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"900","letterSpacing":"-0.03em"}},"textColor":"accent","fontSize":"xx-large"} -->
<p class="has-text-align-center has-accent-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:900;letter-spacing:-0.03em"><?php esc_html_e( 'YOUR DESIGN', 'riker' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Free up time to do more of the things you love', 'riker' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'MORE INFO', 'riker' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="margin-top:0"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Get the free theme. Search for ', 'riker' ); ?><code><em><strong><?php esc_html_e( 'riker', 'riker' ); ?></strong></em></code><?php esc_html_e( ' in your site\'s dashboard.', 'riker' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
