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

    <!-- ACF for target words -->
    <div id = "target-header" class = "clearfix">
      <h2 class = "target-word"><?php the_field('adjective1'); ?></h2>
      <h2 class = "target-word"><?php the_field('adjective2'); ?></h2>
      <h2 class = "target-word"><?php the_field('adjective3'); ?></h2>
    </div>
     <!-- ACF for target images -->
     <div id = "target-icons" class = "clearfix">
      <?php
        $image = get_field('image1');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "target-icon" />
      <?php endif; ?>
      <?php
        $image = get_field('image2');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "target-icon" />
      <?php endif; ?>
      <?php
        $image = get_field('image3');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "target-icon" />
      <?php endif; ?>
    </div>

</div>
<!-- loop to print content  -->

</div>
<?php get_footer(); ?>
