<?php
include_once('ChristianHymns_LifeCycle.php');
class ChristianHymns_Plugin extends ChristianHymns_LifeCycle {

    /**
     * See: http://plugin.michael-simpson.com/?page_id=31
     * @return array of option meta data.
     */
    public function getOptionMetaData() {
        //  http://plugin.michael-simpson.com/?page_id=31
        return array(
            //'_version' => array('Installed Version'), // Leave this one commented-out. Uncomment to test upgrades.
            'ATextInput' => array(__('Enter in some text', 'my-awesome-plugin')),
            'AmAwesome' => array(__('I like this awesome plugin', 'my-awesome-plugin'), 'false', 'true'),
            'CanDoSomething' => array(__('Which user role can do something', 'my-awesome-plugin'),
                                        'Administrator', 'Editor', 'Author', 'Contributor', 'Subscriber', 'Anyone')
        );
    }

//    protected function getOptionValueI18nString($optionValue) {
//        $i18nValue = parent::getOptionValueI18nString($optionValue);
//        return $i18nValue;
//    }

    protected function initOptions() {
        $options = $this->getOptionMetaData();
        if (!empty($options)) {
            foreach ($options as $key => $arr) {
                if (is_array($arr) && count($arr > 1)) {
                    $this->addOption($key, $arr[1]);
                }
            }
        }
    }

    public function getPluginDisplayName() {
        return 'Christian Hymns';
    }

    protected function getMainPluginFileName() {
        return 'christian-hymns.php';
    }

    /**
     * See: http://plugin.michael-simpson.com/?page_id=101
     * Called by install() to create any database tables if needed.
     * Best Practice:
     * (1) Prefix all table names with $wpdb->prefix
     * (2) make table names lower case only
     * @return void
     */
    protected function installMenusAndCategories() {	
	require_once(CHRISTIAN_HYMNS_DIR. '/scripts/install/create_categories.php' );
	require_once(CHRISTIAN_HYMNS_DIR. '/scripts/install/create_page_list.php' );
    }





    /**
     * See: http://plugin.michael-simpson.com/?page_id=101
     * Drop plugin-created tables on uninstall.
     * @return void
     */
    protected function uninstallMenusAndCategories() {
	require_once(CHRISTIAN_HYMNS_DIR. '/scripts/uninstall/delete_categories.php' );
	require_once(CHRISTIAN_HYMNS_DIR. '/scripts/uninstall/delete_posts.php' );
    }


    /**
     * Perform actions when upgrading from version X to version Y
     * See: http://plugin.michael-simpson.com/?page_id=35
     * @return void
     */





  public function upgrade() {
	
	$upgradeOk = true;
    $savedVersion = $this->getVersionSaved();
    if ($this->isVersionLessThan($savedVersion, '1.9')) {
        if ($this->isVersionLessThan($savedVersion, '1.8')) {
            if ($this->isVersionLessThan($savedVersion, '1.5')) {
				
function christian_hymns_atualiza_fun() {
//require_once(CHRISTIAN_HYMNS_DIR. '/scripts/install/actives-plugins.php' );
//require_once(CHRISTIAN_HYMNS_DIR. '/scripts/data/insert-sql.php' );
}

add_action( 'init', 'christian_hymns_atualiza_fun' );
            
			}
            // perform version 1.8 upgrade action
        }
        // perform version 2.0 upgrade action
     }

}




    public function addActionsAndFilters() {

        // Add options administration page
        // http://plugin.michael-simpson.com/?page_id=47
        add_action('admin_menu', array(&$this, 'addSettingsSubMenuPage'));

        // Example adding a script & style just for the options administration page
        // http://plugin.michael-simpson.com/?page_id=47
        //        if (strpos($_SERVER['REQUEST_URI'], $this->getSettingsSlug()) !== false) {
        //            wp_enqueue_script('my-script', plugins_url('/js/my-script.js', __FILE__));
        //            wp_enqueue_style('my-style', plugins_url('/css/my-style.css', __FILE__));
        //        }


        // Add Actions & Filters
        // http://plugin.michael-simpson.com/?page_id=37


        // Adding scripts & styles to all pages
        // Examples:
        //        wp_enqueue_script('jquery');
        //        wp_enqueue_style('my-style', plugins_url('/css/my-style.css', __FILE__));
        //        wp_enqueue_script('my-script', plugins_url('/js/my-script.js', __FILE__));

wp_enqueue_style('style-christian-hymns-a', plugins_url( '/css/style.css', __FILE__));


        // Register short codes
        // http://plugin.michael-simpson.com/?page_id=39


		include_once( CHRISTIAN_HYMNS_DIR .'/scripts/shortcodes/player.php');
		$sc = new ChristianHymnsPagesPlayer();
		$sc->register('christian-hymns-player');
		
		
		include_once( CHRISTIAN_HYMNS_DIR .'/scripts/shortcodes/list.php');
		$sc = new ChristianHymnsPagesList();
		$sc->register('cristhian-himns-list');
		
		
        // Register AJAX hooks
        // http://plugin.michael-simpson.com/?page_id=41

    }


}