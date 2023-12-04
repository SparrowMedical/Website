<?php
/**
 * Title: Latest News
 * Slug: riker/latest-news
 * Categories: posts
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Latest News', 'riker' ); ?>"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"2px","color":"var:preset|color|accent-2"},"bottom":{"width":"2px","color":"var:preset|color|accent-2"},"left":{"width":"0px","style":"none"},"radius":{"bottomRight":"11px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-bottom-right-radius:11px;border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--accent-2);border-right-width:2px;border-bottom-color:var(--wp--preset--color--accent-2);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Latest News', 'riker' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-links-plain"} -->
<p class="is-style-links-plain"><a href="#"><?php esc_html_e( 'View All ', 'riker' ); ?><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-2-color">»</mark></strong></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":4,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"className":"is-style-hover-zoom-out"} /-->

<!-- wp:group {"style":{"border":{"radius":{"bottomRight":"11px","topLeft":"0px","topRight":"0px","bottomLeft":"0px"},"right":{"color":"var:preset|color|base-3","width":"1px"},"bottom":{"color":"var:preset|color|base-3","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:11px;border-right-color:var(--wp--preset--color--base-3);border-right-width:1px;border-bottom-color:var(--wp--preset--color--base-3);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"is-style-links-underline-on-hover"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
