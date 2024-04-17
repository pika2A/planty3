<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">

        <header class="nav-bar" id="header">
            <a href="http://planty3.local/accueil/">
                <img class="logo" src="http://planty3.local/wp-content/uploads/2023/10/Logo.png" alt="Logo de Planty">
            </a>

            <button class="menu-toggle" aria-controls="menu" aria-expanded="false">
                <span class="menu-toggle-icon"></span>
            </button>

            <nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>

            </nav>

        </header>

        <main>


            <script>
                const menuToggle = document.querySelector(".menu-toggle");
                const menuContainer = document.querySelector("#menu");

                menuToggle.addEventListener("click", () => {
                    menuToggle.classList.toggle("open");
                    menuContainer.classList.toggle("open");
                });
            </script>