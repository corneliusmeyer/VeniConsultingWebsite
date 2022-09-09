<?php


// Den Navwalker hinzufügen
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


function veni_theme_setup()
{
  //Erlaubt das Hinzufügen von Thumbnails für die Blogs etc
  add_theme_support('post-thumbnails');

  // Ein Menü namens 'Primary Menu' wird angelegt
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

//Hook
add_action('after_setup_theme', 'veni_theme_setup');

//Blogvorschau auf 50 Zeichen Begrenzen
function custom_excerpt_length() {
  return 50;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Customizer Code einbinden
require get_template_directory(). '/inc/customizer.php';


/*
Source: https://stackoverflow.com/questions/65546253/bootstrap-v5-wp-bootstrap-navwalker-dropdown-navbar-not-work
Folgender Code wurde aus der obigen Quelle kopiert
*/
add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
     if ( array_key_exists( 'data-toggle', $atts ) ) {
         unset( $atts['data-toggle'] );
         $atts['data-bs-toggle'] = 'dropdown';
     }
     return $atts;
}