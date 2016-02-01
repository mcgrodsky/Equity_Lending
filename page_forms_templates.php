<?php
// Template Name: Forms Display
?>
<?php get_header(); ?>
  <h4 class = "form-header"> Please fill out required fields. We will contact you upon form submission </h4>
<div class = "form">
  <?php if(have_posts()):
    while(have_posts()):
      the_post();?>
      <h2><?php the_content();?></h2>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer();?>
