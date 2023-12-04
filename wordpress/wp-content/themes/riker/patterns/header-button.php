<?php
/**
 * Title: Theme Header with Button
 * Slug: riker/header-button
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile">
		<!-- wp:column {"verticalAlignment":"center","width":"175px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:175px">
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"className":"is-style-links-plain"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"base-2","overlayTextColor":"contrast","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"175px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:175px">
			<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Us', 'riker' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
