<?php
/**
 * Theme About Page
 *
 * @package WesternWitch
 * @since 1.0
 */

function westernwitch_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_westernwitch-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'westernwitch-theme-admin-style',
			get_theme_file_uri( 'resource/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'westernwitch_theme_page_admin_style' );

/**
 * Add theme page
 */
function westernwitch_menu() {
	add_theme_page( esc_html__( 'WesternWitch', 'westernwitch' ), esc_html__( 'WesternWitch', 'westernwitch' ), 'edit_theme_options', 'westernwitch-theme', 'westernwitch_theme_page_display' );
}
add_action( 'admin_menu', 'westernwitch_menu' );

/**
 * Display About page
 */
function westernwitch_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">							
						</div>
					</div>

				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
					</div>
				</div>

				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
					</div>
				</div>
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
