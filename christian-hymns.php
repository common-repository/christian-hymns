<?php
/*
   Plugin Name: Christian Hymns
   Plugin URI: http://wordpress.org/extend/plugins/christian-hymns/
   Version: 2.2
   Author: Clodoaldo Xavier Gomes
   Description: Several hymns for traditional Christian worship. Learn to sing with letters and Melody. 
   <a href="plugins.php?page=ChristianHymns_PluginSettings">Config end add the categories menu created.</a>. 	  
   Text Domain: christian-hymns
   License: GPLv3
  */

/*
    "WordPress Plugin Template" Copyright (C) 2018 Michael Simpson  (email : michael.d.simpson@gmail.com)

    This following part of this file is part of WordPress Plugin Template for WordPress.

    WordPress Plugin Template is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    WordPress Plugin Template is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Contact Form to Database Extension.
    If not, see http://www.gnu.org/licenses/gpl-3.0.html
*/

$ChristianHymns_minimalRequiredPhpVersion = '5.0';

define('CHRISTIAN_HYMNS', plugin_dir_url( __FILE__ ));
define('CHRISTIAN_HYMNS_URL', plugins_url('',__FILE__));
define('CHRISTIAN_HYMNS_DIR', plugin_dir_path(__FILE__));
define('CHRISTIAN_HYMNS_SITE', site_url());
if ( ! defined( 'CHRISTIAN_HYMNS_PLUGIN_VERSION' ) ) define( 'CHRISTIAN_HYMNS_PLUGIN_VERSION', '1.2.3' );
if ( ! defined( 'CHRISTIAN_HYMNS_PLUGIN_DIR_PATH' ) ) define( 'CHRISTIAN_HYMNS_PLUGIN_DIR_PATH', plugins_url( '', __FILE__ ) );
if ( ! defined( 'CHRISTIAN_HYMNS_PLUGIN_BASENAME' ) ) define( 'CHRISTIAN_HYMNS_PLUGIN_BASENAME', plugin_basename( __FILE__) );


/**
 * Check the PHP version and give a useful error message if the user's version is less than the required version
 * @return boolean true if version check passed. If false, triggers an error which WP will handle, by displaying
 * an error message on the Admin page
 */
function ChristianHymns_noticePhpVersionWrong() {
    global $ChristianHymns_minimalRequiredPhpVersion;
    echo '<div class="updated fade">' .
      __('Error: plugin "Christian Hymns" requires a newer version of PHP to be running.',  'christian-hymns').
            '<br/>' . __('Minimal version of PHP required: ', 'christian-hymns') . '<strong>' . $ChristianHymns_minimalRequiredPhpVersion . '</strong>' .
            '<br/>' . __('Your server\'s PHP version: ', 'christian-hymns') . '<strong>' . phpversion() . '</strong>' .
         '</div>';
}


function ChristianHymns_PhpVersionCheck() {
    global $ChristianHymns_minimalRequiredPhpVersion;
    if (version_compare(phpversion(), $ChristianHymns_minimalRequiredPhpVersion) < 0) {
        add_action('admin_notices', 'ChristianHymns_noticePhpVersionWrong');
        return false;
    }
    return true;
}


/**
 * Initialize internationalization (i18n) for this plugin.
 * References:
 *      http://codex.wordpress.org/I18n_for_WordPress_Developers
 *      http://www.wdmac.com/how-to-create-a-po-language-translation#more-631
 * @return void
 */
function ChristianHymns_i18n_init() {
    $pluginDir = dirname(plugin_basename(__FILE__));
    load_plugin_textdomain('christian-hymns', false, $pluginDir . '/languages/');
}


//////////////////////////////////
// Run initialization
/////////////////////////////////

// Initialize i18n
add_action('plugins_loaded','ChristianHymns_i18n_init');

// Run the version check.
// If it is successful, continue with initialization for this plugin
if (ChristianHymns_PhpVersionCheck()) {
    // Only load and run the init function if we know PHP version can parse it
    include_once('christian-hymns_init.php');
    ChristianHymns_init(__FILE__);
}