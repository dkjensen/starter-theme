<?php
/**
 * Enqueued files.
 *
 * @package Dkjensen\StarterTheme
 */

namespace Dkjensen\StarterTheme\Functions;

/**
 * Enqueued assets
 *
 * @return void
 */
function starter_theme_scripts() {
	wp_enqueue_style( 'starter-theme-style', get_stylesheet_uri(), array(), STARTER_THEME_VERSION );
	wp_enqueue_style( 'starter-theme-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'starter-theme-style' ), STARTER_THEME_VERSION );

	wp_enqueue_script( 'starter-theme-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), STARTER_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\starter_theme_scripts' );
