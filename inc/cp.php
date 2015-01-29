<?php

/*
 * Config file for custom post types
 *
*/
add_action('init', 'create_post_type');
function create_post_type() {
    
    // Podcast
    register_post_type('pod', array('labels' => array('name' => __('podcast'), 'singular_name' => __('pod')), 'public' => true, 'has_archive' => true, 'supports' => array('title','comments', 'thumbnail')));
    
    // Video
    register_post_type('video', array('labels' => array('name' => __('video'), 'singular_name' => __('video')), 'public' => true, 'has_archive' => true, 'supports' => array('title','comments', 'thumbnail')));
    
    // Produkter
    register_post_type('produkter', array('labels' => array('name' => __('produkter'), 'singular_name' => __('produkt')), 'taxonomies' => array('category'), 'public' => true, 'has_archive' => true, 'supports' => array('title', 'editor', 'thumbnail')));
};?>