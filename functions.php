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
    if (is_page('about')) {
    wp_enqueue_style(
        'labka-vet-about',
        get_template_directory_uri() . '/assets/css/about.css',
        ['labka-vet-main'],
        '1.0'
    );
    }
   if (is_page('services')) {
    wp_enqueue_style(
        'labka-vet-services',
        get_template_directory_uri() . '/assets/css/services.css',
        ['labka-vet-main'],
        filemtime(get_template_directory() . '/assets/css/services.css')
    );
    }
    if (is_page('team')) {
    wp_enqueue_style(
        'labka-vet-team',
        get_template_directory_uri() . '/assets/css/team.css',
        ['labka-vet-main'],
        filemtime(get_template_directory() . '/assets/css/team.css')
    );
    }
    if (is_home() || is_single()) {
    wp_enqueue_style(
        'labka-vet-blog',
        get_template_directory_uri() . '/assets/css/blog.css',
        ['labka-vet-main'],
        filemtime(get_template_directory() . '/assets/css/blog.css')
    );
    }
    if (is_page('contact')) {
        wp_enqueue_style(
            'labka-vet-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            ['labka-vet-main'],
            filemtime(get_template_directory() . '/assets/css/contact.css')
        );
    }
}

add_action('wp_enqueue_scripts', 'labka_vet_assets');
function labka_vet_send_appointment() {
    // Проверка, что форма пришла с нашего сайта
    check_admin_referer('labka_appointment');
 
    // Забираем и чистим поля
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $pet     = sanitize_text_field($_POST['pet'] ?? '');
    $date    = sanitize_text_field($_POST['date'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');
 
    // Собираем письмо
    $to      = get_option('admin_email');
    $subject = 'New appointment request from ' . $name;
    $body    = "Name: $name\nPhone: $phone\nPet: $pet\nPreferred day: $date\n\nMessage:\n$message";
 
    wp_mail($to, $subject, $body);
 
    // Возвращаем на страницу контактов с пометкой "отправлено"
    wp_safe_redirect(home_url('/contact/?sent=1'));
    exit;
}
 
add_action('admin_post_labka_appointment', 'labka_vet_send_appointment');
add_action('admin_post_nopriv_labka_appointment', 'labka_vet_send_appointment');