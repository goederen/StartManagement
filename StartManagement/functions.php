<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);
function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
/**
 * Enqueue scripts and styles.
 */
function startmanagement_scripts() {
    wp_register_script( 'startmanagement', dirname(get_stylesheet_uri()) .'/js/startmanagement.js');
 	wp_enqueue_script( 'startmanagement');
	
    wp_enqueue_style( 'googlefonts', "https://fonts.googleapis.com/icon?family=Material+Icons");
}
add_action( 'wp_enqueue_scripts', 'startmanagement_scripts' );
/**
 * Tekstdomein van mijn child-thema opzetten.
 *
 * Roep tekstdomein aan voor dit child-thema.
 * Vertalingen dienen opgeslagen te worden in de 'languages'-directory.
 */
function my_child_theme_setup() {
	load_child_theme_textdomain( 'parallax-one', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
?>