<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $wpdb;

require_once(CHRISTIAN_HYMNS_DIR. '/scripts/install/actives-plugins.php' );

// category
if(isset($_GET['cat'])){
$category_hymns = $_GET['cat']; 
}
else
{
$category_hymns = get_option( 'category_hymns_hcc' );
}

if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }


$args = array(
	'base'               => '%_%',
	'format'             => '?paged=%#%',
	'total'              => 0,
	'current'            => 0,
	'show_all'           => false,
	'end_size'           => 1,
	'mid_size'           => 2,
	'prev_next'          => true,
	'prev_text'          => __('&laquo; Previous'),
	'next_text'          => __('Next &raquo;'),
	'type'               => 'plain',
	'add_args'           => array(),
	'add_fragment'       => '',
	'before_page_number' => '',
	'after_page_number'  => '',
	'cat' => array( $category_hymns ),
	'orderby' => 'ID',
	'order'   => 'ASC',
	'posts_per_page' => 10,
	'paged' => $paged
); 

//print_r($args);

$the_query = new WP_Query( $args );
	
if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop --><table class="plugin-options-table">
	<ul>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<tr><td><li><a style="text-decoration: none" href="<?php echo get_permalink(); ?>" alt="<?php echo the_title(); ?>"><?php the_title(); ?></a></li>
		</td></tr>
<?php

 endwhile; ?>
	</ul>
	</table>
	<!-- end of the loop -->

	<!-- pagination here -->
	
<?php //previous_posts_link(); ?> 
<?php //next_posts_link(); ?>	

<?php 
//get_next_posts_link(); //usage with max_num_pages;

echo get_previous_posts_link(__('&laquo; Previous'));
echo '&nbsp;&nbsp;&nbsp;';
echo get_next_posts_link(__('Next &raquo;'), $the_query->max_num_pages);

 ?>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<?php // esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
<?php endif;
get_query_var('page');
?>