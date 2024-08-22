<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function ajouter_lien_admin_au_menu($items, $args) {
    // Vérifiez si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Créez le lien "Admin"
        $lien_admin = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        
        // Séparez les éléments du menu en un tableau
        $menu_items = explode('</li>', $items);
        
        // Insérez le lien "Admin" à la deuxième position du tableau
        array_splice($menu_items, 1, 0, $lien_admin);
        
        // Fusionnez les éléments du tableau en une chaîne de caractères
        $items = implode('</li>', $menu_items);
    }
    return $items;
}
// Ajoutez le filtre à 'wp_nav_menu_items'
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_au_menu', 10, 2);
