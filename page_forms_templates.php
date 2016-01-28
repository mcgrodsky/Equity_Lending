<?php
// Template Name: Forms Display
?>
<?php get_header(); ?>

  <?php if(have_posts()):
    while(have_posts()):
      the_post();?>
      <h2><?php the_content();?></h2>

  <?php endwhile; ?>
  <?php endif; ?>
  <h3> Forms! </h3>
<?php get_footer();?>
