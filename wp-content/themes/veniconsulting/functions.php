<?php


// Register Nav Walker class_alias
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function veni_theme_setup()
{

  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));


}

add_action('after_setup_theme', 'veni_theme_setup');


function veni_init_widgets($id){
  register_sidebar(array(
    'name'  => 'InfoWarning',
    'id'    => 'infowarning',
    'before_widget' => '<div class="container alert alert-success border border-secondary text-center my-3">',
    'after_widget'  => '</div>',
  ));
}

add_action('widgets_init', 'veni_init_widgets');