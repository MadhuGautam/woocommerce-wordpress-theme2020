<?php

    function load_stylesheets()
    {
        wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all' );
        wp_enqueue_style('stylesheet');

        wp_register_style('custom', get_template_directory_uri() . '/assets/css/app.css', '', 1, 'all' );
        wp_enqueue_style('custom');
    }

    add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


    function loadjs(){

        wp_register_script('customjs', get_template_directory_uri() . '/assets/js/app.js', 'jquery',  1, true);
        wp_enqueue_script('customjs');
    }

    add_action( 'wp_enqueue_scripts', 'loadjs' );

    //Add Menus
    add_theme_support('menus');

    //add featured images    
    add_theme_support('post-thumbnails');
    
//register some menus
    register_nav_menus(

        array(

            'top-menu' => 'Top Menu',
            'footer-menu' => __('Footer Menu', 'theme'),
        )

    );

    //add image size manually
    add_image_size('smallest', 60, 60, true);

    add_image_size('largest', 800, 800, true);

    //Note: set to false becouse image size adjust with plugin named 'Force Regenerate Thumbnails'

    add_image_size('post_image', 1100, 750, false);

    //Add a widget
    register_sidebar(

        array(

            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );

        //Add a widget
        register_sidebar(

            array(
    
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'class' => '',
                'before_title' => '<h4>',
                'after_title' => '</h4>',
            )
        );
        
        function mytheme_add_woocommerce_support() {
            add_theme_support( 'woocommerce', array(
                'thumbnail_image_width' => 150,
                'single_image_width'    => 300,
        
                'product_grid'          => array(
                    'default_rows'    => 3,
                    'min_rows'        => 2,
                    'max_rows'        => 8,
                    'default_columns' => 4,
                    'min_columns'     => 2,
                    'max_columns'     => 5,
                ),
            ) );
        }
        
        add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>