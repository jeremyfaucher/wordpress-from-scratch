<?php
/**
 * Sets up theme defaults and registers support for various WordPress features
 * 
 * By Jeremy Faucher - https://github.com/jeremyfaucher/wordpress-starter-theme
 *
 * @since starter 1.0
 */
function starter_setup() {
    // Register Menu Locations.
	register_nav_menus( array(
		'main' => __( 'Main Menu', 'starter' ),
		'footer' => __( 'Footer Menu', 'starter' ),
	) );
}
add_action( 'after_setup_theme', 'starter_setup' );

/*
* Enqueue css and js
*/
function starter_styles() {
	wp_dequeue_style( 'global-styles' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', 1);
}
add_action('wp_enqueue_scripts', 'starter_styles');
/* 
* Adds Featured Image to post admin
*/
add_theme_support( 'post-thumbnails',array('post'));
/**
 * Filter the except length to 20 words.
 */
function excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'excerpt_length', 999 );
/* 
* Include cleanup functions
*/
// Disable Media duplicates - https://perishablepress.com/disable-wordpress-generated-images/
require get_template_directory() . '/inc/disable_media_duplicates.php';
// Disable srcset
require get_template_directory() . '/inc/disable_srcset_img.php';
// Remove the WordPress Block Styles
require get_template_directory() . '/inc/remove_blocks.php';
// Remove the "category" slug
require get_template_directory() . '/inc/remove_cat_slug.php';
// Disable comments
require get_template_directory() . '/inc/remove_comments.php';
// Remove the WordPress admin editors
//require get_template_directory() . '/inc/remove_editors.php';
// Disable emojis
require get_template_directory() . '/inc/remove_emojis.php';
//Remove WordPress.org Dns-prefetch
require get_template_directory() . '/inc/remove_wp_dns_prefetch.php';
//Remove All RSS Header links from head
require get_template_directory() . '/inc/remove_rss_header_links.php';
//Remove short link from head
require get_template_directory() . '/inc/remove_short_link.php';
//Remove rest and json api
require get_template_directory() . '/inc/remove_json_api.php';
//Remove uneeded nav menu id and classes
require get_template_directory() . '/inc/remove_nav_classes.php';



