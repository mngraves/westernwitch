<?php
/**
 * WesternWitch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WesternWitch
 * @since 1.0
 */

 // Automatic theme updates from the GitHub repository
add_filter('pre_set_site_transient_update_themes', 'automatic_GitHub_updates', 100, 1);
function automatic_GitHub_updates($data) {
  // Theme information
  $theme   = get_stylesheet(); // Folder name of the current theme
  $current = wp_get_theme()->get('Version'); // Get the version of the current theme
  // GitHub information
  $user = 'mngraves'; // The GitHub username hosting the repository
  $repo = 'westernwitch'; // Repository name as it appears in the URL
  // Get the latest release tag from the repository. The User-Agent header must be sent, as per
  // GitHub's API documentation: https://developer.github.com/v3/#user-agent-required
  $file = @json_decode(@file_get_contents('https://api.github.com/repos/'.$user.'/'.$repo.'/tags', false,
      stream_context_create(['http' => ['header' => "User-Agent: ".$user."\r\n"]])
  ));
  if($file && sizeof($file) > 0) 
  {
	$tag = $file[0];
	$tagVersion = filter_var($tag->name, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // Only return a response if the new version number is higher than the current version
    if($tagVersion > $current) {
  	  $data->response[$theme] = array(
	      'theme'       => $theme,
	      // Strip the version number of any non-alpha characters (excluding the period)
	      // This way you can still use tags like v1.1 or ver1.1 if desired
	      'new_version' => $tagVersion,
	      'url'         => 'https://github.com/'.$user.'/'.$repo,
	      'package'     => 'https://github.com/'.$user.'/'.$repo . '/archive/refs/heads/main.zip'
      );
    }
  }
  return $data;
}

if ( ! function_exists( 'westernwitch_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function westernwitch_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'westernwitch_support' );

if ( ! function_exists( 'westernwitch_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function westernwitch_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'westernwitch-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);

		wp_enqueue_script(
			'westernwitch-script',
			get_theme_file_uri( 'resource/js/custom.js' ),
			array(),
			filemtime( get_theme_file_path( 'resource/js/custom.js' ) ),
			true
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'westernwitch_styles' );

if ( ! function_exists( 'westernwitch_block_editor_styles' ) ) :

	/**
	 * Enqueue rtl editor styles
	 */

	function westernwitch_block_editor_styles() {
		if ( is_rtl() ) {
			wp_enqueue_style(
				'westernwitch-rtl',
				get_theme_file_uri( 'rtl.css' ),
				array(),
				filemtime( get_theme_file_path( 'rtl.css' ) )
			);
		}
	}

endif;

add_action( 'enqueue_block_editor_assets', 'westernwitch_block_editor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';
