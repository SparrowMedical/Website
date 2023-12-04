<?php
/**
 *
 * Adds custom Block Styles to the editor.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @package Riker
 */

/**
 * Array of block styles.
 */
if ( ! function_exists( 'riker_block_styles' ) ) {
	function riker_block_styles() {
		return array(
			'hover-zoom-in' => array(
				'label' => __( 'Zoom in on hover', 'riker' ),
				'blocks' => 'post-featured-image,image,cover'
			),
			'hover-zoom-out' => array(
				'label' => __( 'Zoom out on hover', 'riker' ),
				'blocks' => 'post-featured-image,image,cover'
			),
			'overlay-pixels-small' => array(
				'label' => __( 'Overlay: pixels small', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-pixels-large' => array(
				'label' => __( 'Overlay: pixels large', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-bricks-small' => array(
				'label' => __( 'Overlay: bricks small', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-bricks-large' => array(
				'label' => __( 'Overlay: bricks-large', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-mosaic' => array(
				'label' => __( 'Overlay: mosaic', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-squares' => array(
				'label' => __( 'Overlay: squares', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-diagonal-large' => array(
				'label' => __( 'Overlay: diagonal large', 'riker' ),
				'blocks' => 'cover'
			),
			'overlay-diagonal-small' => array(
				'label' => __( 'Overlay: diagonal small', 'riker' ),
				'blocks' => 'cover'
			),
			'hover-zoom-img-in' => array(
				'label' => __( 'Zoom in on image hover', 'riker' ),
				'blocks' => 'media-text'
			),
			'hover-zoom-block-in' => array(
				'label' => __( 'Zoom in on block hover', 'riker' ),
				'blocks' => 'media-text'
			),
			'hover-zoom-img-out' => array(
				'label' => __( 'Zoom out on image hover', 'riker' ),
				'blocks' => 'media-text'
			),
			'hover-zoom-block-out' => array(
				'label' => __( 'Zoom out on block hover', 'riker' ),
				'blocks' => 'media-text'
			),
			'hover-effect-light' => array(
				'label' => __( 'Hover: Light', 'riker' ),
				'blocks' => 'button'
			),
			'hover-effect-dark' => array(
				'label' => __( 'Hover: Dark', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-natural' => array(
				'label' => __( 'Shadow: Natural', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-deep' => array(
				'label' => __( 'Shadow: Deep', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-sharp' => array(
				'label' => __( 'Shadow: Sharp', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-outlined' => array(
				'label' => __( 'Shadow: Outlined', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-outlined-alt' => array(
				'label' => __( 'Shadow: Outlined Alt', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-outlined-alt-2' => array(
				'label' => __( 'Shadow: Outlined Alt 2', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-crisp' => array(
				'label' => __( 'Shadow: Crisp', 'riker' ),
				'blocks' => 'button'
			),
			'shadow-crisp-alt' => array(
				'label' => __( 'Shadow: Crisp Alt', 'riker' ),
				'blocks' => 'button'
			),
			'gradient-text-1' => array(
				'label' => __( 'Gradient text 1', 'riker' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'gradient-text-2' => array(
				'label' => __( 'Gradient text 2', 'riker' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'gradient-text-3' => array(
				'label' => __( 'Gradient text 3', 'riker' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'gradient-text-4' => array(
				'label' => __( 'Gradient text 4', 'riker' ),
				'blocks' => 'paragraph,heading,site-title,site-tagline,post-title,query-title'
			),
			'links-plain' => array(
				'label' => __( 'Links - plain', 'riker' ),
				'blocks' => 'paragraph,heading,site-title,post-title,post-author,post-author-name,post-author-biography,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'links-underline-on-hover' => array(
				'label' => __( 'Links - underline on hover', 'riker' ),
				'blocks' => 'paragraph,heading,site-title,post-title,post-author,post-author-name,post-author-biography,post-terms,query-pagination-previous,query-pagination-next,query-pagination-numbers'
			),
			'dotted' => array(
				'label' => __( 'Dotted', 'riker' ),
				'blocks' => 'separator'
			),
			'dotted-medium' => array(
				'label' => __( 'Dotted (medium)', 'riker' ),
				'blocks' => 'separator'
			),
			'dotted-large' => array(
				'label' => __( 'Dotted (large)', 'riker' ),
				'blocks' => 'separator'
			),
			'dashed' => array(
				'label' => __( 'Dashed', 'riker' ),
				'blocks' => 'separator'
			),
			'fading' => array(
				'label' => __( 'Fading', 'riker' ),
				'blocks' => 'separator'
			),
			'inline' => array(
				'label' => __( 'Inline', 'riker' ),
				'blocks' => 'list,categories,page-list'
			),
			'circle' => array(
				'label' => __( 'Circle', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'disc' => array(
				'label' => __( 'Disc', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'square' => array(
				'label' => __( 'Square', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'line' => array(
				'label' => __( 'Line', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'check' => array(
				'label' => __( 'Check', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'check-large' => array(
				'label' => __( 'Check (large)', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'check-huge' => array(
				'label' => __( 'Check (huge)', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'cross' => array(
				'label' => __( 'Cross', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'cross-large' => array(
				'label' => __( 'Cross (large)', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'cross-huge' => array(
				'label' => __( 'Cross (huge)', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'star' => array(
				'label' => __( 'Star', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'star-outline' => array(
				'label' => __( 'Star Outline', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'heart' => array(
				'label' => __( 'Heart', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'arrow' => array(
				'label' => __( 'Arrow', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'dc-arrow' => array(
				'label' => __( 'Down Curve Arrow', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'chevron' => array(
				'label' => __( 'Chevron', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'double-chevron' => array(
				'label' => __( 'Double Chevron', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'counter' => array(
				'label' => __( 'Counter', 'riker' ),
				'blocks' => 'list'
			),
			'none' => array(
				'label' => __( 'No Style', 'riker' ),
				'blocks' => 'list,list-item'
			),
			'stripes-no-border' => array(
				'label' => __( 'Stripes with no border', 'riker' ),
				'blocks' => 'table'
			),
			'quotation-mark' => array(
				'label' => __( 'Quotation Mark', 'riker' ),
				'blocks' => 'quote'
			),
			'partial-border-small' => array(
				'label' => __( 'Partial border (small)', 'riker' ),
				'blocks' => 'group'
			),
			'partial-border-medium' => array(
				'label' => __( 'Partial border (medium)', 'riker' ),
				'blocks' => 'group'
			),
			'partial-border-large' => array(
				'label' => __( 'Partial border (large)', 'riker' ),
				'blocks' => 'group'
			),
		);
	}
}

/**
 * Register the block styles.
 */
if ( ! function_exists( 'riker_register_block_styles' ) ) {
	function riker_register_block_styles() {
		$block_styles = riker_block_styles();
		foreach ( $block_styles as $block_style => $attrs ) {
			if ( isset($attrs['label']) && $attrs['label'] !== '' ) {
				$label = $attrs['label'];
			} else {
				$label = $block_style;
			}
			if ( isset($attrs['handle']) && $attrs['handle'] !== '' ) {
				$handle = $attrs['handle'];
			} else {
				$handle = 'riker-style';
			}
			if ( isset($attrs['style']) && $attrs['style'] !== '' ) {
				$style = $attrs['style'];
			} else {
				$style = '';
			}
			$blocks = explode( ',', $attrs['blocks'] );
			$block_count = 0;
			foreach ( $blocks as $block ) {
				$block_count++;
				if ( strpos( $block, '/' ) !== false ) {
					$block = $block;
				} else {
					$block = 'core/' . $block;
				}
				if ( $block_count > 1 ) {
					$style = '';
				}
				register_block_style(
					$block,
					array(
						'name' => $block_style,
						'label'	=> $label,
						'style_handle' => $handle,
						'inline_style' => $style
					)
				);
			}
		}
	}
}
add_action( 'init', 'riker_register_block_styles' );

/**
 * Enqueue the block styles.
 */
if ( ! function_exists( 'riker_enqueue_block_styles' ) ) {
	function riker_enqueue_block_styles() {
		$files = glob( RIKER_TEMPLATE_DIR . '/assets/block-styles/core/*.min.css' );
		foreach ( $files as $file ) {
			$filename = basename( $file, '.min.css' );
			wp_enqueue_block_style(
				'core/' . $filename,
				array(
					'handle' => 'riker-wp-block-' . $filename,
					'src' => get_theme_file_uri( 'assets/block-styles/core/' . $filename . '.min.css' ),
					'path' => get_theme_file_path( 'assets/block-styles/core/' . $filename . '.min.css' ),
					'ver' => RIKER_VERSION
				)
			);
		}
	}
}
add_action( 'init', 'riker_enqueue_block_styles' );
