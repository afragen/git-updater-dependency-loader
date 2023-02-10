<?php
/**
 * Dependencies API Example.
 *
 * Plugin Name:       Dependencies API Example
 * Plugin URI:        https://github.com/afragen/dependencies-api-example
 * Description:       Add plugin card data for non-dot org dependencies.
 * Version:           0.1.0
 * Author:            Andy Fragen
 * License:           MIT
 * Requires at least: 5.2
 * Requires PHP:      7.1
 * GitHub Plugin URI: https://github.com/afragen/dependencies-api-example
 * Primary Branch:    main
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the Composer autoloader.
require __DIR__ . '/vendor/autoload.php';

// Add the sites with REST endpoints that return plugins_api() data when passed `slug` query arg.
add_filter(
	'plugin_dependency_endpoints',
	function () {
		return array(
			'https://git-updater.com/wp-json/git-updater/v1/plugins-api/',
			'https://pub.thefragens.com/gravityforms.json',
		);
	}
);
