<?php
// Template Name: Neighborhood Display
?>
<?php get_header(); ?>

<h3>Two Column</h3>

  <?php if(have_posts()):
    while(have_posts()):
      the_post();?>
      <h2><?php the_title();?></h2>
      <h2><?php the_content();?></h2>

  <?php endwhile; ?>
<?php endif; ?>
<h1> Two column, etc </h1>
<?php get_footer();?>
