<?php get_header(); ?>
<div id = "contact-page">
<!-- loop to print content  -->
  <?php
    if(have_posts()):
      while(have_posts()):
        the_post(); ?>
        <h3><?php the_content(); ?> </h3>
      <?php endwhile;
    endif;
  ?>
</div>
<?php get_footer(); ?>
