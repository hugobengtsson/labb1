<?php

// Adding support for the following:
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


// Hook for registering menus.
add_action('after_setup_theme', 'registerMenu');

// Registering the different menus for the site.
function registerMenu() {

    register_nav_menu('main_menu', 'Huvudmeny');
    register_nav_menu('footer_menu', 'Footer meny');
    register_nav_menu('subpage_menu', 'Undersida meny');

}


// Hook for adding widgets.
add_action('widgets_init', 'myWidgets');

function myWidgets() {

    // Registering the different widgets for the project.
    register_sidebar(
        array(
            'name' => 'footer1',
            'id' => 'footer1',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
    register_sidebar(
        array(
            'name' => 'footer2',
            'id' => 'footer2',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
    register_sidebar(
        array(
            'name' => 'footer3',
            'id' => 'footer3',
            'before_widget' => '<ul class="social">',
            'after_widget' => '</ul>',
        )
        );
    register_sidebar(
        array(
            'name' => 'sidebar1',
            'id' => 'sidebar1',
            'before_widget' => '',
            'after_widget' => '',
        )
        );

}





// Hook for changing the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');


function change_footer_admin () {
    
    // Changing the text.
    echo 'Utvecklad med <span style="font-size:18px;">&#129505;</span> av <a href="mailto:hugo@capellium.se">Hugo Bengtsson</a> för Medieinstitutet.';

}






?>