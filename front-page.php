<?php

/**
* Plantilla para página de inicio
*
* @package      openwebinarsgenesis
* @author       Jose Arcos
* @link         http://www.josearcos.me
* @copyright    Copryright (c) 2016, Jose Arcos
* @license      GPL-3.0+
*/


add_action( 'genesis_meta', 'openwebinarsgenesis_home_page_setup' );

/**
* Configurar el diseño de la página de inicio cargando las secciones
* correspondientes cuando los widgets están activos.
*
* @since 1.0.0
*/
function openwebinarsgenesis_home_page_setup() {
  $home_sidebars = array(
    'home-welcome'    => is_active_sidebar( 'home-welcome' ),
    'call-to-action'  => is_active_sidebar( 'call-to-action' ),
  );

  // Devuelve en el caso de que no haya sidebars activas
  if( ! in_array( true, $home_sidebars ) ) {
    return;
  }

  // Añadir Home Welcome area si el widget está activo
  if ( $home_sidebars['home-welcome'] ) {
    add_action( 'genesis_after_header', 'openwebinarsgenesis_add_home_welcome' );
  }

  // Añadir Call to action area si el widget está activo
  if ( $home_sidebars['call-to-action'] ) {
    add_action( 'genesis_after_header', 'openwebinarsgenesis_add_call_to_action' );
  }

  // Forzar el ancho total
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

  // Eliminar el loop
  remove_action( 'genesis_loop', 'genesis_do_loop' );

}

/**
* Mostrar el contenido en la sección "Home Welcome".
*
* @since 1.0.0
*/
function openwebinarsgenesis_add_home_welcome() {
  genesis_widget_area( 'home-welcome',
    array(
      'before'  => '<div class="home-welcome"><div class="wrap">',
      'after'   => '</div></div>'
    )
  );
}

/**
* Mostrar el contenido en la sección "Call to action".
*
* @since 1.0.0
*/
function openwebinarsgenesis_add_call_to_action() {
  genesis_widget_area( 'call-to-action',
    array(
      'before'  => '<div class="call-to-action"><div class="wrap">',
      'after'   => '</div></div>'
    )
  );
}


genesis();
