
<?php get_header(); ?>

<section class="above-fold-container banner">
  <hgroup class="logo">
    <h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
    <h4>Bloomington, IN</h4>
  </hgroup>
  <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'site-nav', 'container_id' => 'desktopMenu')); ?>
  <hgroup class="community-page-title-statement">
    <h1>
      THE COWORK COMMUNITY
    </h1>
    <br/>
    <h3>Some follow their significant other to B-town, some made the decision themselves, and some just never left. No matter how we got here, Bloomington is our home, we freaking love it, and we want to share it with you.</h3>
  </hgroup>
</section>
<div>

<h1>Hello</h1>
<?php
 if (have_posts()) :
   while (have_posts()) : the_post(); ?>
   <h1><?php the_title(); ?></h1>
   <p><?php the_content(); ?></p>

 <?php endwhile;
 else :
   echo '<p>There are no posts</p>';
 endif;
?>

</div>
<div class="reveal-menu">
</div>


<?php get_footer(); ?>
