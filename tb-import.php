<?php
/*
Plugin Name: Theme Blvd Importer
Description: A free plugin that integrates some helpful import/export functionality into Theme Blvd themes.
Version: 1.0.0
Author: Theme Blvd
Author URI: http://themeblvd.com
License: GPL2

    Copyright 2015  Theme Blvd

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/

define( 'TB_IMPORTER_PLUGIN_VERSION', '1.0.0' );
define( 'TB_IMPORTER_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'TB_IMPORTER_PLUGIN_URI', plugins_url( '' , __FILE__ ) );

/**
 * Run Import/Export
 *
 * @since 1.0.0
 */
function themeblvd_importer_init() {

	// global $_themeblvd_foo;

	// Include general items
	// include_once( TB_BUILDER_PLUGIN_DIR . '/inc/class-tb-foo.php' );

	// Error handling
	// ... requires 2.5.2

	if ( is_admin() ){

		// ...

	}

}
add_action( 'after_setup_theme', 'themeblvd_importer_init', 5 );

/**
 * Register text domain for localization.
 *
 * @since 1.0.0
 */
function themeblvd_importer_textdomain() {
	load_plugin_textdomain('theme-blvd-import');
}
add_action( 'init', 'themeblvd_import_textdomain' );
