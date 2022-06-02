<?php


function Herkausnamai_theme_support()
{
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    //logo
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'Herkausnamai_theme_support');





//menu funkcija
function Herkausnamai_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'Herkausnamai_menus');
// End function menu






function Herkausnamai_register_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('Herkausnamai-style', get_template_directory_uri() . "/style.css", array('Herkausnamai-bootstrap'), '$version', 'all');
    wp_enqueue_style('Herkausnamai-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css', array(), '5.2.0', 'all');
    wp_enqueue_style('Herkausnamai-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1', 'all');
}

add_action('wp_enqueue_scripts', 'Herkausnamai_register_styles');


function Herkausnamai_register_scripts()
{
    $version1 = wp_get_theme()->get('Version');
    wp_enqueue_script('Herkausnamai-bootstrap-popper', 'https://unpkg.com/@popperjs/core@2', array(), '5.2.0', true);
    wp_enqueue_script('Herkausnamai-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true);
    
    wp_enqueue_script('Herkausnamai-main', get_template_directory_uri() . "/assets/js/main.js", array(), '$version1', true);
}

add_action('wp_enqueue_scripts', 'Herkausnamai_register_scripts');
