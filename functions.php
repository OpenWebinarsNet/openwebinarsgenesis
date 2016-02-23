<?php

/**
* Personalizaciones del tema
*
* @package      openwebinarsgenesis
* @author       Jose Arcos
* @link         http://www.josearcos.me
* @copyright    Copryright (c) 2016, Jose Arcos
* @license      GPL-3.0+
*/

/*
* Incluimos la función de configuración de Genesis,
* para cargar el framework
*/

// Cargar el textdomain del tema hijo
load_child_theme_textdomain( 'openwebinarsgenesis' );

/**
* Configuración del tema
*
* Añadir todas lsa funciones necesiarias para los ganchos y filtros.
* Todas las funciones están definidas sobre esta función de configuración
*
* @since 1.0.0
*/
add_action( 'genesis_setup', 'openwebinarsgenesis_setup', 15 );
function openwebinarsgenesis_setup() {

  // Definir contastes del tema
  define( 'CHILD_THEME_NAME', 'openwebinarsgenesis' );
  define( 'CHILD_THEME_URL', 'http://github.com/jarcos/openwebinarsgenesis' );
  define( 'CHILD_THEME_VERSION', '1.0.0' );

  // Añadir HTML5
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

  // Añadir viewport meta tag para navegadores móviles
  add_theme_support( 'genesis-responsive-viewport' );

  // Añadir soporte para accesibilidad
  add_theme_support( 'genesis-accessibility', array(
    '404-page',
    'drop-down-menu',
    'headings',
    'rems',
    'search-form',
    'skip-links',
  ) );

  // Añadir soporte para footer widgets
  add_theme_support( 'genesis-footer-widgets', 3 );

  // Quitar los layous que usan sidebar secundario
  genesis_unregister_layout( 'content-sidebar-sidebar' );
  genesis_unregister_layout( 'sidebar-content-sidebar' );
  genesis_unregister_layout( 'sidebar-sidebar-content' );

  // Quitar sidebar secundaria
  unregister_sidebar( 'sidebar-alt' );

  // Añadir area de widgets
  include_once( get_stylesheet_directory() . '/includes/widget-areas.php' );

}
