<?php

function styling() {
    wp_enqueue_style('boostrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('font', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
} 

add_action('init', 'styling');

    add_theme_support( 'widgets');

    add_theme_support('post-thumbnails');

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

    add_action('init', 'menu');

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
                'name' => 'Aside Area 1',
                'id' => 'aside-1',
                'description' => 'Aside Widget Area',
                'before_widget' => '',
                'after_widget'  => '',
                )
                );

                register_sidebar(
                    array(
                    'name' => 'Aside Area 2',
                    'id' => 'aside-2',
                    'description' => 'Aside Widget Area',
                    'before_widget' => '',
                    'after_widget'  => '',
                    )
                    );
                
                    register_sidebar(
                        array(
                        'name' => 'Aside Area 3',
                        'id' => 'aside-3',
                        'description' => 'Aside Widget Area',
                        'before_widget' => '',
                        'after_widget'  => '',
                        )
                        );

                        register_sidebar(
                            array(
                            'name' => 'Aside search Area',
                            'id' => 'search',
                            'description' => 'Search Widget Area',
                            'before_widget' => '',
                            'after_widget'  => '',
                            )
                            );
    }

    add_action('widgets_init', 'widget_areas');
?>