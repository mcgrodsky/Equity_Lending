<?php
// Template Name: Neighborhood Display
?>
<?php get_header(); ?>
  <div id = "neighborhood-display" class = "clearfix">
<!-- individual block of neighborhood info for neighborhood 1-->
    <div class = "grid">
      <div id = "neighborhood-item" class = "clearfix">
        <h1 class = "neighborhood-title"><?php the_field('neighborhood_Title_1'); ?></h1>
        <?php
          $image = get_field('image_1');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "neighborhood-img" />
        <?php endif; ?>
        <h1 class = "neighborhood-type"><?php the_field('type_1'); ?></h1>
        <h1 class = "neighborhood-amount">$<?php the_field('amount_1'); ?></h1>
        <h1 class = "neighborhood-description"><?php the_field('description_1'); ?></h1>
      </div>
    </div>
    <!-- individual block of neighborhood info for neighborhood 1-->
      <div class = "grid">
        <div id = "neighborhood-item" class = "clearfix">
          <h1 class = "neighborhood-title"><?php the_field('neighborhood_Title_2'); ?></h1>
          <?php
            $image = get_field('image_2');
            if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "neighborhood-img" />
          <?php endif; ?>
          <h1 class = "neighborhood-type"><?php the_field('type_2'); ?></h1>
          <h1 class = "neighborhood-amount">$<?php the_field('amount_2'); ?></h1>
          <h1 class = "neighborhood-description"><?php the_field('description_2'); ?></h1>
        </div>
      </div>
      <!-- individual block of neighborhood info for neighborhood 1-->
      <div class = "grid">
        <div id = "neighborhood-item" class = "clearfix">
          <h1 class = "neighborhood-title"><?php the_field('neighborhood_Title_3'); ?></h1>
          <?php
            $image = get_field('image_3');
            if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "neighborhood-img" />
          <?php endif; ?>
          <h1 class = "neighborhood-type"><?php the_field('type_3'); ?></h1>
          <h1 class = "neighborhood-amount">$<?php the_field('amount_3'); ?></h1>
          <h1 class = "neighborhood-description"><?php the_field('description_3'); ?></h1>
        </div>
      </div>
  </div>
<?php get_footer(); ?>
