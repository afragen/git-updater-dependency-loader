<?php
/**
 * Git Updater Dependency Loader.
 *
 * @package plugin-dependency-loader
 *
 * Plugin Name:       Git Updater Dependency Loader
 * Plugin URI:        https://github.com/afragen/git-updater-dependency-loader
 * Description:       Add plugin card data for non-dot org dependencies, Git Updater.
 * Version:           0.1.0
 * Author:            Andy Fragen
 * License:           MIT
 * Requires at least: 5.2
 * Requires PHP:      7.1
 * GitHub Plugin URI: https://github.com/afragen/git-updater-dependency-loader
 * Primary Branch:    main
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the Composer autoloader.
require __DIR__ . '/vendor/autoload.php';

// Add the sites with REST endpoints that return plugins_api() data when passed `slug` query arg.
// Can also pass URL to JSON file.
add_filter(
	'plugin_dependency_endpoints',
	function () {
		return [ 'https://git-updater.com/wp-json/git-updater/v1/plugins-api/' ];
	}
);
