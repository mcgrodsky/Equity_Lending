<?php get_header(); ?>
<div id ="page-about" class = "clearfix">
  <div class = "about-description">
    <?php
      if(have_posts()):
        while(have_posts()):
          the_post(); ?>
          <h3><?php the_content(); ?> </h3>
        <?php endwhile;
      endif;
    ?>
    <div id = "icon" class = "clearfix">
      <div class = "icon-div">Rapid </div>
      <div class = "icon-div">Strong </div>
      <div class = "icon-div">Knowledgeable </div>
    </div>
  </div>
  <!-- loop to print content  -->

</div>
<?php get_footer(); ?>
