<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$category_hymns_hcc = array('cat_name' => 'HCC', 'category_description' => 'Hymnal for Christian Worship - HCC', 'category_nicename' => 'hinario-para-o-culto-cristao', 'category_parent' => '');
// Create the category
$category_hymns_hcc_id = wp_insert_category($category_hymns_hcc);

// Option Register
add_option( 'category_hymns_hcc', $category_hymns_hcc_id, '', 'yes' );




// my first post in category category_hymns_hcc
$post_id = wp_insert_post(array (
'post_type' => 'post',
'post_title' => 'HCC Hinario para o Culto Cristao',
'post_name' => 'hcc-hinario-para-o-culto-cristao-pt-br',
'post_content' => 'Seja bem vindo ao HCC<br><br>[catlist pagination=yes name=hinario-para-o-culto-cristao post_type="post"]',
'post_excerpt' => '',
'post_status' => 'publish',
'comment_status' => 'closed',   
'ping_status' => 'closed',   
'post_category' => array( $category_hymns_hcc_id ),   
));
// An array of IDs of categories we want this post to have.
$cat_ids = array( $category_hymns_hcc_id );
$cat_ids = array_map( 'intval', $cat_ids );
$cat_ids = array_unique( $cat_ids );
$term_taxonomy_ids = wp_set_object_terms( $post_id, $cat_ids, 'category' );
if ( is_wp_error( $term_taxonomy_ids ) ) {
	// There was an error somewhere and the terms couldn't be set.
} else {
	// Success! The post's categories were set.
}
// en first post




$category_hymns_cc = array('cat_name' => 'CC', 'category_description' => 'Hymnal for Christian Worship - CC', 'category_nicename' => 'cantor-cristao', 'category_parent' => '');
// Create the category
$category_hymns_cc_id = wp_insert_category($category_hymns_cc);

// Option Register
add_option( 'category_hymns_cc', $category_hymns_cc_id, '', 'yes' );


// my secound  post in category category_hymns_hcc
$post_id = wp_insert_post(array (
'post_type' => 'post',
'post_title' => 'CC Cantor Cristao',
'post_name' => 'cc-cantor-cristao-pt-br',
'post_content' => 'Seja bem vindo ao CC<br><br>[catlist pagination=yes name=cantor-cristao post_type="post"]',
'post_excerpt' => '',
'post_status' => 'publish',
'comment_status' => 'closed',   
'ping_status' => 'closed',   
'post_category' => array( $category_hymns_cc_id ),   
));
// An array of IDs of categories we want this post to have.
$cat_ids = array( $category_hymns_cc_id );
$cat_ids = array_map( 'intval', $cat_ids );
$cat_ids = array_unique( $cat_ids );
$term_taxonomy_ids = wp_set_object_terms( $post_id, $cat_ids, 'category' );
if ( is_wp_error( $term_taxonomy_ids ) ) {
	// There was an error somewhere and the terms couldn't be set.
} else {
	// Success! The post's categories were set.
}
// en first post





$category_hymns_hp = array('cat_name' => 'HP', 'category_description' => 'Hymnal for Christian Worship - HP', 'category_nicename' => 'harpa-crista', 'category_parent' => '');
// Create the category
$category_hymns_hp_id = wp_insert_category($category_hymns_hp);

// Option Register
add_option( 'category_hymns_hp', $category_hymns_hp_id, '', 'yes' );


// my secound  post in category category_hymns_hhp
$post_id = wp_insert_post(array (
'post_type' => 'post',
'post_title' => 'HP Harpa Crista',
'post_name' => 'hp-harpa-crista-pt-br',
'post_content' => 'Seja bem vindo a HP<br><br>[catlist pagination=yes name=harpa-crista post_type="post"]',
'post_excerpt' => '',
'post_status' => 'publish',
'comment_status' => 'closed',   
'ping_status' => 'closed',   
'post_category' => array( $category_hymns_hp_id ),   
));
// An array of IDs of categories we want this post to have.
$cat_ids = array( $category_hymns_hp_id );
$cat_ids = array_map( 'intval', $cat_ids );
$cat_ids = array_unique( $cat_ids );
$term_taxonomy_ids = wp_set_object_terms( $post_id, $cat_ids, 'category' );
if ( is_wp_error( $term_taxonomy_ids ) ) {
	// There was an error somewhere and the terms couldn't be set.
} else {
	// Success! The post's categories were set.
}
// en first post

?>