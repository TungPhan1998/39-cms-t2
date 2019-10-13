<?php
/*
Plugin Name: Random-Post
Plugin URI: https://tuandc.com/
Description: Plugin lấy ngẫu nhiên liên kết các bài viết và hiển thị lên một bài viết cụ thể
Version: 1.0
Author: Tùng Phan Văn

*/
function tung_cms_rand_posts() {
$args = array(
 'post_type' => 'post',
 'orderby' => 'rand',
 'posts_per_page' => 5,
 );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
  $string .= '<ul>';
   while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
   }
   $string .= '</ul>';
   wp_reset_postdata();
} else {
   $string .= 'no posts found';
}
   return $string;
}
add_shortcode('tung','tung_cms_rand_posts');