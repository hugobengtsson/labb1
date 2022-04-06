<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


add_action('after_setup_theme', 'registerMenu');

function registerMenu() {

    register_nav_menu('main_menu', 'Huvudmeny');
    register_nav_menu('footer_menu', 'Footer meny');
    register_nav_menu('subpage_menu', 'Undersida meny');

}

// Changes the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');

function change_footer_admin () {

    echo '<p>Utvecklad av Hugo Bengtsson.</p>';

}






?>