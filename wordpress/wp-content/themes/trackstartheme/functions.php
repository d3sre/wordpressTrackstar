<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Main' ));
   register_nav_menu('header-menu',__( 'Trust us' ));
    register_nav_menu('header-menu',__( 'Test us' ));
     register_nav_menu('header-menu',__( 'Buy us' ));
}
add_action( 'init', 'register_my_menu' );
?>