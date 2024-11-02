<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $wpdb;

require_once(CHRISTIAN_HYMNS_DIR. '/scripts/install/actives-plugins.php' );

// post
$post = get_post(); 
$post_id = $post->ID;

$post_title = apply_filters('the_title', $post->post_title); 
$bloginfo = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );
$site_url = network_site_url( '/' );

$post_content = $post->post_content;
$post_excerpt = apply_filters('the_post_excerpt', $post->post_excerpt);
$post_content = apply_filters('the_post_content', $post->post_content);
$post_excerpt = sanitize_text_field($post_excerpt);
$post_excerpt = preg_replace("/[^a-zA-Z0-9 ' @,-.;:\/]/", "", $post_excerpt);
$url_music = 'https://fidelize.net.br/webservices/christian-hymns/data/'.$post_excerpt;


$hiddenvalues = explode("/",$post_excerpt);
$colection = $hiddenvalues[0];

$path_img = plugins_url( '/christian-hymns/images', '' );
$cover = $path_img. '/'.strtolower($colection).'.jpg';

$attr = array(
	'src'      => $url_music,
	'loop'     => '',
	'autoplay' => '',
	'preload'  => 'none'
);
echo wp_audio_shortcode( $attr );

?>