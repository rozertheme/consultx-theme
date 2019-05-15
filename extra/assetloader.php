<?php
/**
 * This organizes the loading of css and js file assets.
 *
 * @package consultx
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'restricted access' );
}

/**
 * OOP load directory.
 */
function consultx_asset_dir() {
	return get_template_directory_uri() . '/assets';
}

/**
 * Cache buster.
 */
function consultx_stylesuffix() {
	$the_theme = wp_get_theme();
	return $the_theme->get( 'Version' );
}

if ( ! function_exists( 'consultx_asset_head' ) ) {

	/**
	 * Scripts and assets that needed to load in the header.
	 * JQuery, etc.
	 */
	function consultx_asset_head() {
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'wp_enqueue_scripts', 'consultx_asset_head' );

/**
 * Set of scripts and styles being loaded in the body.
 * Hook action in wp_footer when doing pagespeed optimization later
 */
function consultx_assets() {
		$the_theme = wp_get_theme();

		wp_enqueue_style( 'consultx-style', asset_path( '/css/themestyle.min.css' ), false, null );

		wp_enqueue_script( 'consultxjs', asset_path( '/js/themes.min.js' ), array(), consultx_stylesuffix(), true );

}
add_action( 'wp_enqueue_scripts', 'consultx_assets' );

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
	add_editor_style( asset_path( '/css/editor-style.min.css' ) );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


/**
 * Action to insert hook before the body.
 * You still need to insert this hook inside your body.
 */
function consultx_body_begin() {
	do_action( 'consultx_body_begin' );
}

/**
 * Updated assetloader.
 *
 * @param filename $filename text Gets the filename.
 *
 * @return filename Returns the filename of a compiled asset is present otherwise it will return the normal filename for cache busting purposes.
 */
function asset_path( $filename ) {
	$dist_path = consultx_asset_dir();
	$directory = dirname( $filename ) . '/';
	$file      = basename( $filename );
}
