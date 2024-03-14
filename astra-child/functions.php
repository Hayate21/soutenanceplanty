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
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

//HOOK ADMIN

add_filter('wp_nav_menu_items','add_admin_link',10,2);// Ajoute un filtre pour modifier les éléments de menu WordPress

function add_admin_link($items,$args) {// Définit une fonction pour ajouter un lien administrateur au menu
    if (is_user_logged_in() && $args->theme_location) {// Vérifie si l'utilisateur est connecté et si la localisation du thème est définie
        $items .= '<li class="admin"><a href="'. admin_url('index.php') .'">Admin</a></li>';// Ajoute un élément de menu "Admin" à la fin de la liste d'éléments de menu
    }
    return $items;// Renvoie les éléments de menu modifiés
}




