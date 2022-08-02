<?php
/**
 * Remove REST and JSON API
 * https://wordpress.stackexchange.com/questions/211467/remove-json-api-links-in-header-html
 */
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

remove_action( 'wp_head', 'rest_output_link_wp_head');
