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

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="site-header">
      <nav class="hidden-nav" id="hiddenMenu">
        <a href="<?php bloginfo('wpurl');?>"><h1><?php echo get_bloginfo('name');?></h1></a>
        <div class='scroll-menu-icon' id='scrollHamburger'><h3>Menu</h3></div>
        <ul class="nav-menu flex-row" id="scrollDesktopMenu">
          <li><a href="#contact"><h4>About</h4></a></li>
          <li><a href=""><h4>Community</h4></a></li>
          <li><a href=""><h4>Partners</h4></a></li>
          <li><a href=""><h4>Pricing</h4></a></li>
          <li class="contact"><a href=""><h4>Contact</h4></a></li>
        </ul>
      </nav>
      <div class='menu-icon' id='hamburger'><h3>Menu</h3></div>
      <div class="mobile-menu hide" id="mobileMenu">
        <h1>Cowork</h1>
        <aside class="exit" id="exit"><span>X<span></aside>
        <ul>
          <li><a href="#"><h2>About</h2></a></li>
          <li><a href="#"><h2>Community</h2></a></li>
          <li><a href="#"><h2>Partners</h2></a></li>
          <li><a href="#"><h2>Pricing</h2></a></li>
          <li class="contact"><a href="#"><h2>Contact</h2></a></li>
        </ul>
      </div>
    </header>
