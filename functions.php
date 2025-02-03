<?php
function register_my_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'textdomain'),
    ));
}
add_action('after_setup_theme', 'register_my_menus');

function shopper_enqueue_assets() {
    //(style.css)
    wp_enqueue_style('shopper-style', get_stylesheet_uri());

    //zasranej bootstrap 
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null);

    // ikony
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), null);

    // bootstrap js
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'shopper_enqueue_assets');
?>
