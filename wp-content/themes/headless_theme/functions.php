<?php
if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly
// Remove p tags from content
remove_filter('the_content', 'wpautop');