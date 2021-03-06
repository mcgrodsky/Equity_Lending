<!doctype html>
  <html>
    <head>
      <title>Equity Lending, Inc.</title>
      <?php wp_head(); ?>
      <link href='https://fonts.googleapis.com/css?family=Raleway|Old+Standard|TT|Questrial|Open+Sans' rel='stylesheet' type='text/css'>
    </head>
  <body>
    <div class = "wrapper">
        <div class = "clearfix" id = "header-nav">
          <div id="navigation" class = "clearfix">
            <a href="<?php echo get_option('about'); ?>/"><div class= "logo"> <img src="http://i.imgur.com/hx3NOMA.png" alt="Equity Lending Inc" class = "logo-img" /></div></a>
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
