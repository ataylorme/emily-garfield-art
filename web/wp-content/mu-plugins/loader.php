<?php
/**
 * Plugin Name: HM MU Plugin Loader
 * Description: Loads the MU plugins required to run the site
 * Author: Human Made Limited
 * Author URI: http://hmn.md/
 * Version: 1.0
 *
 * @package Finder
 */

if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
	return;
}

// Specify & load all mu-plugins.
foreach ( [
	'asset-loader/asset-loader.php',
	'artgallery/plugin.php',
	'featured-item-blocks/plugin.php',
] as $file ) {
	// phpcs:disable PHPCS_SecurityAudit.BadFunctions.FilesystemFunctions.WarnFilesystem
	if ( file_exists( __DIR__ . '/' . $file ) ) {
		// phpcs:disable PHPCS_SecurityAudit.Misc.IncludeMismatch.ErrMiscIncludeMismatchNoExt
		require_once __DIR__ . '/' . $file;
		// phpcs:enable
	}
}
