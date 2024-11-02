<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
 
// check for plugin using plugin name

if ( is_plugin_active( 'searchwp-live-ajax-search/index.php' ) ) {
    //plugin is activated
	//echo "Plugin is activated.";
} 
else
{
	echo "<pre>SearchWp-Live-Ajax-Search Plugin is not activated!";
	$url_install_meta_box = admin_url( $path = 'plugin-install.php?tab=plugin-information&plugin=searchwp-live-ajax-search&TB_iframe=true&width=600&height=550', 'admin' );
	
	echo '<br><a href="'.$url_install_meta_box .'" target="_blank">Install SearchWp-Live-Ajax-Search Plugin Plugin</a></pre>';
	die();
}
?> 