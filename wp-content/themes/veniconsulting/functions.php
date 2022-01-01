<?php


// Register Nav Walker class_alias
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function veni_theme_setup()
{

  add_theme_support('post-thumbnails');

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
    'before_widget' => '<div class="alert alert-success border border-secondary text-center my-3 py-0 align-middle">',
    'after_widget'  => '</div>',
  ));
}

add_action('widgets_init', 'veni_init_widgets');

function max_excerpt_length() {
  return 50;
}

add_filter('excerpt_length', 'max_excerpt_length');