<?php


function Herkausnamai_theme_support()
{
    // Adds dynamic title tag support
    add_theme_support('title-tag');

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme', 'Herkausnamai_theme_support');





//menu funkcija
function Herkausnamai_menus()
{
    $locations = array(
        'primary' => "Top nav bar menu",
        'footer' => "Footer Menu Items",
    );
    register_nav_menus($locations);
}

add_action('init', 'Herkausnamai_menus');
// End function menu







function Herkausnamai_register_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('Herkausnamai-style', get_template_directory_uri() . '/style.css?v=' . time(), array('Herkausnamai-bootstrap'), '$version', false,  'all');
    wp_enqueue_style('Herkausnamai-bootstrap', get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css', array(), '5.2.0', 'all');
    wp_enqueue_style('Herkausnamai-owl.carousel', get_template_directory_uri() .'/owlcarousel/owl.carousel.min.css', array(), '', 'all');
    wp_enqueue_style('Herkausnamai-owl.theme', get_template_directory_uri() .'/owlcarousel/owl.theme.default.min.css', array(), '', 'all');
    wp_enqueue_style('Herkausnamai-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1', 'all');
}

add_action('wp_enqueue_scripts', 'Herkausnamai_register_styles');


function Herkausnamai_register_scripts()
{
    $version1 = wp_get_theme()->get('Version');
    wp_enqueue_script('Herkausnamai-bootstrap-popper', 'https://unpkg.com/@popperjs/core@2', array(), '5.2.0', true);
    wp_enqueue_script('Herkausnamai-bootstrap-js', get_template_directory_uri() .'bootstrap/js/bootstrap.bundle.min.js', array(), '5.2.0', true);
    wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '', true );


    wp_enqueue_script('Herkausnamai-main', get_template_directory_uri() . "/assets/js/main.js", array(), '$version1', true);
}

add_action('wp_enqueue_scripts', 'Herkausnamai_register_scripts');








function tutsplus_widgets_init()
{

    // First footer widget area, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('First Footer Widget Area', 'tutsplus'),
        'id' => 'first-footer-widget-area',
        'description' => __('The first footer widget area', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Second Footer Widget Area', 'tutsplus'),
        'id' => 'second-footer-widget-area',
        'description' => __('The second footer widget area', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Third Footer Widget Area', 'tutsplus'),
        'id' => 'third-footer-widget-area',
        'description' => __('The third footer widget area', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Fourth Footer Widget Area', 'tutsplus'),
        'id' => 'fourth-footer-widget-area',
        'description' => __('The fourth footer widget area', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action('widgets_init', 'tutsplus_widgets_init');








