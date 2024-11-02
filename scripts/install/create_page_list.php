<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $wpdb;
$shortcode_cristhian_himns_list = $wpdb->get_var( "SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '[cristhian-himns-list]'" );
if (!$shortcode_cristhian_himns_list) {
$post_id = wp_insert_post(array (
'post_type' => 'page',
'post_title' => 'List',
'post_name' => 'cristhian-himns-list',
'post_content' => '[cristhian-himns-list]',
'post_status' => 'publish',
'comment_status' => 'closed',   
'ping_status' => 'closed',      
));

if ($post_id) {
// insert post meta
add_post_meta($post_id, '[cristhian-himns-list]', $post_id);
}
}
?>