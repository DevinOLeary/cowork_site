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
    <a id="scheduleTour"><h4>SCHEDULE A <hr/> TOUR</h4></a>
  </div>
  <div class="tour-container" id="tourForm">
    <hr />
    <form class="flex-center column">
      <div class="flex-center flex-split">
        <div class="form-subcontainer">
          <label for="your name">
          YOUR NAME &nbsp
          <input type="text" name="name">
          </label>
          <label for="phone number">
          YOUR DIGITS &nbsp
            <input type="phone" name="phone-number">
          </label>
          <label for="email">
          YOUR EMAIL &nbsp
            <input type="email" name="email">
          </label>
        </div>
        <div class="form-subcontainer">
          <label for="date">
          WHAT DAY WORKS FOR YOU? &nbsp
              <input type="text" id="datepicker" name="date">
          </label>
          <label for="tour time">
          WHAT TIME? &nbsp
            <select name="time">
              <option value="11:00">11 am</option>
              <option value="2:00">2 pm</option>
            </select>
          </label>
          <label for="notes">
            <textarea name="notes" rows="3" placeholder="ANY QUESTIONS FOR US?"></textarea>
          </label>
        </div>
      </div>
      <label for="submit">
        <button class="action-button" type="submit">
          <h2>Submit</h2>
        </button>
      </label>

    </form>
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
  <a href="https://www.instagram.com/coworkbtown/?hl=en" target="_blank" class="inverse headline center"><h5 class=" insta-link">+ FOLLOW ALONG ON <hr/>INSTAGRAM<img src="<?php bloginfo('template_directory');?>/media/instagram-logo.png" class="instagram-icon"/></h5></a>
</section>
<div class="map-container">
  <section  class="map" id="map">
  </section>
    <a href="https://www.google.com/maps/dir/''/cowork+bloomington/@39.1649436,-86.6082,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x886c66ddaa8cd77d:0x62d180cce00eb339!2m2!1d-86.53816!2d39.1649646" target="_blank"><button class="directions"><h4><u>GET DIRECTIONS</u></h4></button></a>
</div>
<section class="inverse-section container-fluid col-sm-12 testimony center">
  <h2><?php the_field('testimony'); ?></h2>
  <hr/>
  <h5><?php the_field('testimony_author')?></h5>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxnZHClVCmy5yXs9C0bBpWNh3KkpIpqQo&callback=initMap"
 async defer></script>

<?php get_footer(); ?>
