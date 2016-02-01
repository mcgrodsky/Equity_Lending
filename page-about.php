<?php get_header(); ?>
  <div id ="page-about" class = "clearfix">
    <div class = "about-description">
      <div class = "about">
      <!-- ACF for paragraph header -->
      <h1 class = "about-me-header"><?php the_field('page_header'); ?></h1>
      <!-- loop to print content  -->
      <?php
      if(have_posts()):
        while(have_posts()):
          the_post(); ?>
          <h3 class="about-content"><?php the_content(); ?> </h3>
        <?php endwhile;
      endif;
      ?>

      <!-- ACF for target words -->
      <div id = "target-header" class = "clearfix">
        <h2 class = "target-word target-word-one"><?php the_field('adjective1'); ?></h2>
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
        <p class = "hidden-keyword-description-one"><?php the_field('adjective_description_1'); ?></p>
        <p class = "hidden-keyword-description-two"><?php the_field('adjective_description_2'); ?> </p>
        <p class = "hidden-keyword-description-three"><?php the_field('adjective_description_3'); ?></p>
        <div class = "cta-btn-div">
          <button class = "cta-btn btn-one"><?php the_field('call_to_action_field_1'); ?> </button>
          <button class = "cta-btn btn-two"><?php the_field('call_to_action_field_2'); ?> </button>
          </div>
        </div>  
    </div>

  </div>
</div>

<?php get_footer(); ?>
