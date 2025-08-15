<?php
register_nav_menus( array(
    'header-menu' => __( 'Header Menu', 'mytheme' ),
) );

function mytheme_enqueue_styles() {
    wp_enqueue_style(
        'mytheme-main-style',
        get_template_directory_uri() . '/style/style.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');