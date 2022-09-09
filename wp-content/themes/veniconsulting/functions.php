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

/*
Source: https://stackoverflow.com/questions/65546253/bootstrap-v5-wp-bootstrap-navwalker-dropdown-navbar-not-work
*/
add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
     if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
     }
     return $atts;
}

function custom_excerpt_length() {
  return 50;
}

add_filter('excerpt_length', 'custom_excerpt_length');

require get_template_directory(). '/inc/customizer.php';