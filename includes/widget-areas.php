<?php

/**
* Registrar zona de widgets
*
* @package      openwebinarsgenesis
* @author       Jose Arcos
* @link         http://www.josearcos.me
* @copyright    Copryright (c) 2016, Jose Arcos
* @license      GPL-3.0+
*/

// Registrar zona de wigets en la página de iniccio
genesis_register_sidebar( array(
  'id'          => 'home-welcome',
  'name'        => __( 'Home Welcome', 'openwebinarsgenesis' ),
  'description' => __( 'This is a home widget area that will show on the front page.', 'openwebinarsgenesis')
));

genesis_register_sidebar( array(
  'id'          => 'call-to-action',
  'name'        => __( 'Call to action', 'openwebinarsgenesis' ),
  'description' => __( 'This is a call to action widget area that will show on the front page.', 'openwebinarsgenesis')
));
