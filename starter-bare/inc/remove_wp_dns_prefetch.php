<?php
/**
 * Remove WordPress.org Dns-prefetch
 */
remove_action('wp_head', 'wp_resource_hints', 2);