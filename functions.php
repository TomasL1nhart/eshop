<?php
// Funkce pro registraci menu
function shopper_register_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'shopper'),
    ]);
}
add_action('init', 'shopper_register_menus');

// Funkce pro načítání skriptů a stylů
function shopper_enqueue_assets() {
    // Načtení vlastního stylu (style.css)
    wp_enqueue_style('shopper-style', get_stylesheet_uri());

    // Načtení Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null);

    // Načtení Font Awesome Icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), null);

    // Načtení Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'shopper_enqueue_assets');
?>
