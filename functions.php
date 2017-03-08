
<?php
function cowork_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cowork_resources');

// add titles
add_theme_support('title-tag');

//video header support
add_theme_support( 'custom-header', array(
 'video' => true,
) );

//Menu support
function cowork_features() {
  add_theme_support('menus');
  register_nav_menu('main', 'Main Desktop Menu');
  register_nav_menu('mobile', 'Mobile Menu');
  register_nav_menu('lower', 'Below the Fold Menu');
}
add_action('init', 'cowork_features');

 ?>
