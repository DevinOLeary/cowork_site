<?php get_header(); ?>
<section class="banner">
  <div class="overlay">
  </div>
    <div id="video-container">
      <hgroup class="logo">
        <h1><a href="<?php the_permalink(home); ?>"><?php bloginfo('name'); ?></a></h1>
        <h4>Bloomington, IN</h4>
      </hgroup>
      <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'site-nav', 'container_id' => 'desktopMenu')); ?>
      <video autoplay loop>
        <source src="<?php bloginfo('template_directory');?>/media/cover.mp4" type="video/mp4">
        <source src="<?php bloginfo('template_directory');?>/media/cover.ogv" type="video/ogg">
      </video>
    <div class="title-statement">
      <h1>COWORKING THE WAY<br/>
        <span>YOUR SOUL</span> LIKES IT.</h1>
    </div>
  </div>
</section>
<div class="divider-container reveal-menu">
  <div class="angle-divider"></div>
</div>
<div class="statement flex-center center column">
  <h2><?php the_field('first_statement_headline')?></h2>
  <p><?php the_field('first_statement_content')?></p>
  <div>
    <a href="#"><h4>SCHEDULE A <hr/> TOUR</h4></a>
  </div>
</div>
<section class="space-views">
  <div class="space-container row">
    <a href="#">
      <figure>
        <div id="quiet">
        </div>
        <h5><?php the_field('caption_left')?></h5>
      </figure>
    </a>
    <a href="#">
      <figure>
        <div id="social">
        </div>
        <h5><?php the_field('caption_right')?></h5>
      </figure>
    </a>
  </div>
  <br />
  <a href="https://www.instagram.com/coworkbtown/?hl=en" target="_blank" class="inverse headline center"><h5 class=" insta-link">+ FOLLOW ALONG ON <hr/>INSTAGRAM<img src="<?php bloginfo('template_directory');?>/media/glyph-logo_May2016.png" class="instagram-icon"/></h5></a>
</section>
<div class="map-container">
  <section  class="map" id="map">
  </section>
    <a href="https://www.google.com/maps/dir/''/cowork+bloomington/@39.1649436,-86.6082,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x886c66ddaa8cd77d:0x62d180cce00eb339!2m2!1d-86.53816!2d39.1649646" target="_blank"><button class="directions"><h4><u>GET DIRECTIONS</u></h4></button></a>
</div>
<section class="inverse-section flex-center center column testimony">
  <h2><?php the_field('testimony'); ?></h2>
  <hr/>
  <h5><?php the_field('testimony_author')?></h5>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxnZHClVCmy5yXs9C0bBpWNh3KkpIpqQo&callback=initMap"
 async defer></script>
<?php get_footer(); ?>
