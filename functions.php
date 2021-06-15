<?php
/**
 * Theme functions.
 *
 * @package Dkjensen\StarterTheme
 */

if ( ! defined( 'STARTER_THEME_VERSION' ) ) {
	$starter_theme_version = ! empty( wp_get_theme()->get( 'Version' ) ) ? wp_get_theme()->get( 'Version' ) : '0.0.0-development';

	// Replace the version number of the theme on each release.
	define( 'STARTER_THEME_VERSION', $starter_theme_version );
}

require_once 'lib/functions/enqueue.php';
