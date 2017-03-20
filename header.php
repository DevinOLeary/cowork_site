<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Typekit -->
    <script src="https://use.typekit.net/nlk5nrc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="site-header">
      <nav class="hidden-nav" id="hiddenMenu">
        <a href="<?php bloginfo('wpurl');?>"><h1><?php echo get_bloginfo('name');?></h1></a>
        <div class='scroll-menu-icon' id='scrollHamburger'><h3>Menu</h3></div>
          <?php wp_nav_menu( array('theme_location' => 'lower', 'menu_class' => 'nav-menu flex-row', 'menu_id' => 'scrollDesktopMenu')); ?>
      </nav>
      <?php if(is_page(community)) {?>
        <nav class="child-page-header">
          <hgroup class="logo">
            <h1><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h4>Bloomington, IN</h4>
          </hgroup>
          <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'site-nav', 'container_id' => 'desktopMenu')); ?>
        </nav>
      <?php }?>
      <div class='menu-icon' id='hamburger'><h3>Menu</h3></div>
      <div class="mobile-menu hide" id="mobileMenu">
        <h1>Cowork</h1>
        <aside class="exit" id="exit"><span>X<span></aside>
        <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
      </div>
    </header>
  
