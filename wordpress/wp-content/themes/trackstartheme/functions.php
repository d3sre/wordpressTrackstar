<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Main' ));
}
add_action( 'init', 'register_my_menu' );
?>