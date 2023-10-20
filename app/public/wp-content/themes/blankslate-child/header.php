<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">

        <header class="nav-bar" id="header" role="banner">
            <a href="http://planty3.local/accueil/">
                <img class="logo" src="http://planty3.local/wp-content/uploads/2023/10/Logo.png" alt="Logo de Planty">
            </a>

            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
            </nav>

        </header>