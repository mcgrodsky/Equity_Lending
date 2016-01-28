<?php
// Create a function for register_nav_menus()
function add_wp3menu_support() {

register_nav_menus(
        array(
        'main-menu' => __('Main Navigation'),
        'another-menu' => __('Another Navigation')
        )
     );
}
add_action('init', 'add_wp3menu_support');

function add_scripts(){
  wp_enqueue_style("styles", get_stylesheet_uri());
  wp_enqueue_script("app", get_template_directory_uri()."/js/app.js", array("jquery")

);
}
  add_action("wp_enqueue_scripts", "add_scripts");




 ?>
