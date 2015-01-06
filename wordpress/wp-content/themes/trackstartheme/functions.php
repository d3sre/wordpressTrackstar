<?php

function register_my_menus() {

    register_nav_menu('header-menu', __('Main'));
    register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', 'register_my_menus');
?>