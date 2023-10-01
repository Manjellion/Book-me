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

/* Function to find the last modified CSS file */
function cssLastModified($filepath) {
    if(substr($filepath,-1) != '/') $filepath .= '/';
    $files = glob($filepath.'*.css');
    $files = array_combine($files, array_map("filemtime", $files));
    arsort($files);
    $latest_file = key($files);
    return filemtime($latest_file);
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// REMOVE ADMIN BAR
show_admin_bar(false);

// ENABLE OPTIONS
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

/* Hide content box from pages */
function mvandemar_remove_post_type_support() {
    remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'mvandemar_remove_post_type_support' );

// Remove P Tags from CF7
add_filter('wpcf7_autop_or_not', '__return_false');

// Add WooCommerce Support
add_theme_support('woocommerce');