<?php
/**
 * Theme functions.
 *
 * @package Dkjensen\StarterTheme
 */

if ( ! defined( 'STARTER_THEME_VERSION' ) ) {
	$starter_theme_version = wp_get_theme()->get( 'Version' );

	// Replace the version number of the theme on each release.
	define( 'STARTER_THEME_VERSION', $starter_theme_version );
}

require_once 'lib/functions/enqueue.php';
