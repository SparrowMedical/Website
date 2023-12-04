<?php
/**
 * Theme About Page
 *
 * @package Writer FSE
 * @since 1.0
 */

function writer_fse_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_writer-fse-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'writer-fse-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'writer_fse_theme_page_admin_style' );

/**
 * Add theme page
 */
function writer_fse_menu() {
	add_theme_page( esc_html__( 'Writer FSE', 'writer-fse' ), esc_html__( 'Writer FSE Info', 'writer-fse' ), 'edit_theme_options', 'writer-fse-theme', 'writer_fse_theme_page_display' );
}
add_action( 'admin_menu', 'writer_fse_menu' );

/**
 * Display About page
 */
function writer_fse_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'writer-fse' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://flythemes.net/','writer-fse'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/flylogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Writer FSE!', 'writer-fse' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Writer FSE has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'writer-fse' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Writer Pro Theme', 'writer-fse' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Writer Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'writer-fse' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://flythemes.net/wordpress-themes/writer-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Writer Pro', 'writer-fse' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'writer-fse' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/wordpress-themes/writer-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'writer-fse' ); ?></a>
						<a target="_blank" href="https://flydemos.net/writer/"><?php esc_html_e( 'View Demo', 'writer-fse' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'writer-fse' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'writer-fse' ); ?></h3>
						<p><?php esc_html_e( 'Loved Writer FSE? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'writer-fse' ); ?></p>
						<a href="https://wordpress.org/support/theme/writer-fse/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'writer-fse' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
