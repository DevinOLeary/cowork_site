
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
      <br/>
      <!-- Social media images -->
      <ul class="social-links-container">
        <li><a href="<?php the_field('instagram_link');?>" target="_blank">
          <?php if( get_field('instagram_logo') ):?>
            <img src="<?php the_field('instagram_logo');?>" alt="Instagram" width="55px" height="55px"/>
          <?php endif; ?>
        </a></li>

        <li><a href="<?php the_field('github_link');?>" target="_blank">
          <?php if( get_field('github_logo') ):?>
            <img src="<?php the_field('github_logo');?>" alt="Github" width="55px" height="55px"/>
          <?php endif; ?>
        </a></li>

        <li><a href="<?php the_field('twitter_link');?>" target="_blank">
          <?php if( get_field('twitter_logo') ):?>
            <img src="<?php the_field('twitter_logo');?>" alt="Twitter" width="60px" height="55px"/>
          <?php endif; ?>
        </a></li>

        <li><a href="<?php the_field('extra_link');?>" target="_blank">
          <?php if( get_field('extra_logo') ): ?>
	          <img src="<?php the_field('extra_logo'); ?>" width="55px" height="55px"/>
          <?php endif; ?>
          </a></li>
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
<br/>


<?php get_footer(); ?>
