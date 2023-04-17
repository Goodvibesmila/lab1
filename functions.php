<?php

// Köar in styling från boostrap, font och style.
function styling() {
    wp_enqueue_style('boostrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('font', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
} 

// Hook:ar styling funktionen till init-action. Init är en av de första 
// som körs och används för att registrera och köa scripts och style, med mer.
add_action('init', 'styling');


// Köar in script från Jquery och script.js.

function script() {
    wp_enqueue_script('emilia-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.1.0', true);
    wp_enqueue_script('emilia-scriptjs', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}


// Hook:ar script funktionen till wp enqueue scripts.
// Del två kör script-funktionen.
add_action('wp_enqueue_scripts', 'script');


//Get widget support för wordpress. 
add_theme_support( 'widgets');

//Ger thumbnails-support för wordpress.
add_theme_support('post-thumbnails');


// Skapar/Registrerar en lista med menyval. Jag använder till exempel Huvudmeny (header) och sidmenu (undersidorna).
function menu() {
    $menu = array(
        'huvudmeny' => 'header huvudmeny',
        'sidemenu' => 'sido-meny',
        'sidormeny' => 'sidor-meny',
        'arkivmenu' => 'arkiv-meny',
        'kategoriermenu' => 'kategorier-meny',
        );

        register_nav_menus($menu);
    }


//Aktiverar funktionen och krokar in den.
add_action('init', 'menu');


//En funktion som innehåller en funktion "register_sidebar" som skapar widgets. 
// Översta skapar widgets för footer, sen för Aside, sen för titeln sök vid search-fältet.
function widget_areas() {
        
    register_sidebar(
            array(
            'name' => 'Footer Area 1',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
            )
            );

    register_sidebar(
            array(
            'name' => 'Footer Area 2', 
            'id' => 'footer-2',
            'description' => 'Footer Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
           
            )
            );

    register_sidebar(
            array(
            'name' => 'Footer Area 3',
            'id' => 'footer-3',
            'description' => 'Footer Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
            )
            );

    register_sidebar(
            array(
            'name' => 'Aside meny',
            'id' => 'aside-1',
            'description' => 'Aside Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
            )
            );

    register_sidebar(
            array(
            'name' => 'Searchtitle',
            'id' => 'search-1',
            'description' => 'Search Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
            )
            );

    register_sidebar(
            array(
            'name' => 'Searchtitlesearchside',
            'id' => 'search-2',
            'description' => 'Search Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
            )
            );                   
    }


//Kör funktionen widget_areas och krokar fast den.
add_action('widgets_init', 'widget_areas');


?>