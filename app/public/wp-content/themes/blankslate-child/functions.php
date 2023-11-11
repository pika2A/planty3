<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);


// END ENQUEUE PARENT ACTION


//fonction pour ajouter le lien admin quand connecté
function ajouter_lien_admin($items, $args)
{ //condition si  items (chaine de caractere qui contient les elements du menu) et args (objet qui contient info du menu)
    if ( // si l’emplacement du thème est “main-menu”
        $args->theme_location == 'main-menu'
    ) { //si l'utilisateur est connecté
        if (is_user_logged_in()) {
            $admin_link = '<li class="admin"><a href="' . esc_url(admin_url()) . '">Admin</a>';
            $items_array = explode('</li>', $items);
            //La fonction explode est utilisée pour diviser la chaîne $items en un tableau d’éléments de menu
            $middle_index = floor(count($items_array) / 2);
            // floor est utilisée pour déterminer l’indice du milieu du tableau $items_array
            array_splice($items_array, $middle_index, 0, $admin_link);
            //array_splice est utilisée pour insérer le lien d’administration au milieu des deux autres liens sans suprimer les liens existant
            $items = implode('</li>', $items_array);
            //implode est utilisée pour fusionner les éléments de menu en une chaîne de caractères.
        }
    }
    return $items;
}
//Ce filtre permet de modifier les éléments de menu avant qu’ils ne soient affichés
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);
