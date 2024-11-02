<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// Get Option Register
get_option( 'category_hymns_hcc' );
wp_delete_category( $category_hymns_hcc_id )
?>