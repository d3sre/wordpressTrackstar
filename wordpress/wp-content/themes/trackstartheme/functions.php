<?php

function register_my_menus() {
 register_nav_menus(
    array(
      'header-menu' => __( 'Main' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

add_action('init', 'register_my_menus');
?>