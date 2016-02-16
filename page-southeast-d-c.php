<?php
// Template Name: Neighborhood Display
?>
<?php get_header(); ?>
<div id = "neighborhood-display" class = "clearfix">
  <h3 class ="neighborhood-title-page"><?php the_title( '<h3>', '</h3>' ); ?></h3>

  <!--How can I refactor following block? They are each representing one "listing" of each neighborhood -->

    <!-- individual block of neighborhood info for neighborhood 1-->
  <div class = "grid">
    <div id = "neighborhood-item" class = "clearfix">
      <h1 class = "neighborhood-title"><?php the_field('neighborhood_title1'); ?></h1>
        <?php
        $image = get_field('image1');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class = "neighborhood-img" />
      <?php endif; ?>
      <h1 class = "neighborhood-type"><?php the_field('type1'); ?></h1>
      <h1 class = "neighborhood-amount">$<?php the_field('amount1'); ?></h1>
      <h1 class = "neighborhood-description"><?php the_field('description1'); ?></h1>
    </div>
  </div>
  
</div>


<?php get_footer(); ?>
