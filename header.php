<!doctype html>
  <html>
    <head>
      <title>Equity Lending, Inc.</title>
      <?php wp_head(); ?>
    </head>
  <?php get_header(); ?>
  <body>
    <div class = "wrapper">
      <div class = "clearfix" id = "header-nav">
        <a href="<?php echo get_option('about'); ?>/"><div class= "logo"> <img src="http://i.imgur.com/oHYEVI1.jpg" alt="Equity Lending Inc" width="250px" height="100px" class = "img-one" /> </div></a>
        <div id="navigation" class = "clearfix">
          <?php
        wp_nav_menu( array(
        'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
        'menu_class' => 'dropdown', //Adding the class for dropdowns
        'container_id' => 'navwrap', //Add CSS ID to the containter that wraps the menu.
        'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function
        ));
        ?>
  </div>
      </div>
