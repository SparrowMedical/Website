<?php
/**
 * Title: Banner
 * Slug: writer-fse/banner
 * Categories: writer-fse, banner
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>","id":595,"dimRatio":40,"overlayColor":"secondary","minHeight":700,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"primary","textColor":"white","className":"banner-sub-title","fontSize":"small"} -->
<h4 class="wp-block-heading banner-sub-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="padding-top:6px;padding-right:var(--wp--preset--spacing--60);padding-bottom:6px;padding-left:var(--wp--preset--spacing--60);letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Book Publishing House','writer-fse'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"white","fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-banner-title-font-size" style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e('Get the latest bestsellers','writer-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"white","fontSize":"medium"} -->
<p class="has-text-align-center has-white-color has-text-color has-medium-font-size" style="line-height:1.6"><?php esc_html_e('Pellentesque ultrices, ligula sit amet dictum vehicula, odio erat venenatis odio, ac placerat nisi risus a nisi. In et mi et ex ornare malesuada. In tempor tellus turpis, et feugiat odio elementum ut.','writer-fse'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"border":{"radius":"0px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"18px","bottom":"18px"}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:2px;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:18px;padding-right:30px;padding-bottom:18px;padding-left:30px"><?php esc_html_e('Buy Book Now','writer-fse'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->