<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');



// Changes the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');

function change_footer_admin () {

    echo '<p>Utvecklad av Hugo Bengtsson.</p>';

}






?>