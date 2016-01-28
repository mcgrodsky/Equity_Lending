<?php get_header(); ?>
<div id ="page-about" class = "clearfix">
  <div class = "about-description">
    <!-- ACF for paragraph header -->
    <h1 class = "about-me-header"><?php the_field('page_header'); ?></h1>
    <!-- loop to print content  -->
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
       <div class = "single-icon">
        <?php
          $image = get_field('image1');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "target-icon target-icon-one" />
        <?php endif; ?>
       </div>
      <div class = "single-icon">
        <?php
          $image = get_field('image2');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "target-icon target-icon-two" />
        <?php endif; ?>
      </div>
      <div class = "single-icon">
        <?php
          $image = get_field('image3');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "target-icon target-icon-three" />
        <?php endif; ?>
      </div>
    </div>

    <div id = "keyword-description">
      <p class = "hidden-keyword-description-one">WE know stuff. Period. </p>
      <p class = "hidden-keyword-description-two">We know other stuff. Exclamation! </p>
      <p class = "hidden-keyword-description-three">Do we know stuff? </p>
    </div>

</div>


</div>
<?php get_footer(); ?>
