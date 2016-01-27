<?php get_header(); ?>

<h1> Contact Page </h1>
<!-- loop to print content  -->
<?php
  if(have_posts()):
    while(have_posts()):
      the_post(); ?>
      <h3><?php the_content(); ?> </h3>
    <?php endwhile;
  endif;
?>

<?php get_footer(); ?>
