
<?php get_header(); ?>
<section class="above-fold-container banner">
  <hgroup class="logo">
    <h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
    <h4>Bloomington, IN</h4>
  </hgroup>
  <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'site-nav', 'container_id' => 'desktopMenu')); ?>
  <div class="flex-center featured-header">
    <?php the_post_thumbnail('featured-thumb');?>
    <hgroup>
      <h1><?php the_title(); ?></h1>
      <br/>
      <h2><?php the_field('job_title'); ?></h2>
      <h2>from</h2>
      <h2><?php the_field('home_town'); ?></h2>
      <ul class="social-links-container">
        <li><a href="<?php this_field('instagram_link');?>"><img src="<?php bloginfo('template_directory');?>/media/instagram-logo.png" alt="Instagram" width="40" height="40"/></a></li>
        <li><a href="<?php this_field('github_link');?>"><img src="<?php bloginfo('template_directory');?>/media/github-logo.png" alt="Github" width="40" height="40"/></a></li>
        <li><a href="<?php this_field('twitter_link');?>"><img src="<?php bloginfo('template_directory');?>/media/twitter-logo.png" alt="Twitter" width="45" height="40"/></a></li>
      </ul>
    </hgroup>
  </div>
</section>
<article class="flex-center reveal-menu featured-content">

  <?php
   if (have_posts()) :
     while (have_posts()) : the_post(); ?>
    <div>
     <?php the_content(); ?>
    </div>
   <?php endwhile;
   else :
     echo '<p>There are no posts</p>';
   endif;
  ?>
</article>
<div class="flex-center">
  <a href="index.php/community"><button class="action-button">
    <h2> &#8592 BACK TO THE STORIES</h2>
  </button></a>
</div>


<?php get_footer(); ?>
