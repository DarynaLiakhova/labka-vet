<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="topbar">
    <div class="container topbar__inner">
        <div class="topbar__left">
            <span>[STREET ADDRESS], Bratislava</span>
            <span>[PHONE]</span>
            <span>[EMAIL]</span>
        </div>

        <div class="topbar__right">
            <span>Mon–Sat · 8:00–18:00</span>
        </div>
    </div>
</div>

<header class="header">
    <div class="container header__inner">

        <a href="#" class="logo">
            <div class="logo__icon">🐾</div>

            <div class="logo__text">
                <strong>Labka Vet</strong>
                <span>Veterinary clinic</span>
            </div>
        </a>

        <nav class="nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'container'      => false,
                'menu_class'     => 'nav__list',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <a href="#contact" class="btn btn--primary">
            Book appointment
        </a>

    </div>
</header>