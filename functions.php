
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


 ?>
