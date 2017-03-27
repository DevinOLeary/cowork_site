<?php
// Import stylesheet
function cowork_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cowork_resources');


function cowork_features() {
  //add menus
  add_theme_support('menus');
  register_nav_menu('main', 'Main Desktop Menu');
  register_nav_menu('mobile', 'Mobile Menu');
  register_nav_menu('lower', 'Below the Fold Menu');
  //add featured image
  add_theme_support('post-thumbnails');
  add_image_size('featured-thumb', 322, 375);
}
add_action('init', 'cowork_features');

// title tags
add_theme_support('title-tag');

function wpb_autolink_featured_images( $html, $post_id, $post_image_id, $overlay ) {

$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );


?>
