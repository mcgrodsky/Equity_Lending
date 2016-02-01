<?php get_header(); ?>
<div id = "contact-page">
<!-- loop to print content  -->
<h1>Contact Us </h1>
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
