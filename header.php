<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url');?>/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Maressa, Maressa Brown">
    <!-- og image -->
    <meta property="og:title" content="<?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="https://www.maressabrown.com" />
    <meta property="og:image" content="<?php bloginfo('template_url');?>/images/maressa_og_image.png" />
    <!-- fonts & stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/maressa_brown_logo.svg" alt="maressa brown logo"></a>
        </div>
        
        <nav class="desktop-nav">
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </nav>

        <div class="hamburger-menu">
            <div class="hamburger-icon">
                <img src="<?php bloginfo('template_url'); ?>/images/hamburger-menu.svg" alt="main menu">
            </div>

            <nav class="mobile-nav">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </nav>
        </div>
    </header>