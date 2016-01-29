<!doctype html>
  <html>
    <head>
      <title>Equity Lending, Inc.</title>
      <?php wp_head(); ?>
    </head>
  <body>
    <div class = "wrapper">
      <div class = "clearfix" id = "header-nav">
        <a href="<?php echo get_option('about'); ?>/"><div class= "logo"> <img src="http://i.imgur.com/oHYEVI1.jpg" alt="Equity Lending Inc"class = "logo-img" /></div></a>
        <div id="navigation" class = "clearfix">
          <?php
          wp_nav_menu( array(
          'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
          'menu_class' => 'dropdown clearfix', //Adding  class for dropdowns
          'container_id' => 'navwrap', //Add ID to the containter that wraps menu.
          'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function
          ));
          ?>
        </div>
      </div>
