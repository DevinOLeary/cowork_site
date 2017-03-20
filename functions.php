
<?php
function cowork_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cowork_resources');

// add titles
add_theme_support('title-tag');
//add featured image
add_theme_support('post-thumbnails');

//video header support


//Menu support
function cowork_features() {
  add_theme_support('menus');
  register_nav_menu('main', 'Main Desktop Menu');
  register_nav_menu('mobile', 'Mobile Menu');
  register_nav_menu('lower', 'Below the Fold Menu');
}
add_action('init', 'cowork_features');

//Global Variables



 ?>
