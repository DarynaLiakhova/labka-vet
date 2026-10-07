<?php

function labka_vet_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'header-menu' => 'Header Menu',
    ]);
}

add_action('after_setup_theme', 'labka_vet_setup');


function labka_vet_assets() {
   wp_enqueue_style(
    'labka-vet-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    filemtime(get_template_directory() . '/assets/css/main.css')
);

    wp_enqueue_script(
        'labka-vet-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'labka_vet_assets');