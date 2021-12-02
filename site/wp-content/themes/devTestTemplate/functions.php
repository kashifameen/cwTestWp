<?php
function kash_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('kash-stylesheet', get_template_directory_uri(). "/style.css", array('kash-bootstrap'), $version, 'all');
    wp_enqueue_style('kash-bootstrap', get_template_directory_uri(). "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array());
    wp_enqueue_style('kash-fontawesome', get_template_directory_uri(). "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array());
};

add_action('wp_enqueue_styles', 'kash_register_styles');
function kash_register_scripts(){
    wp_enqueue_script('kash-bootstrapjs', get_template_directory_uri()."https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), true);
    wp_enqueue_script('kash-javascript', get_template_directory_uri(). "/js/javascript.js",array(), true);
};
add_action('wp_enqueue_scripts', 'kash_register_scripts');
?>
