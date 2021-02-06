<?php

    // add featured img support
    add_theme_support('post-thumbnails');

    /*
    ** function to add custome styles
    ** added by ali hassn
    */

    function ali_add_styles() {
        wp_enqueue_style("Font-awsome-css",get_template_directory_uri() . "/css/Font-awsome.min.css");
        wp_enqueue_style("main-css",get_template_directory_uri() . "/css/main.css");
    };

    /*
    ** function to add custome scripts
    ** added by ali hassn
    */

    function ali_add_scripts() {
        wp_deregister_script("jquery");
        wp_register_script('jquery',includes_url("/js/jquery/jquery.js"),false,'',true);
        wp_enqueue_script("jquery");
        wp_enqueue_script("main-js",get_template_directory_uri() . "/js/main.js",array(),FALSE,TRUE);
    };

     /*
    ** function to add scripts and styles to the page
    ** added by ali hassn
    */

    add_action("wp_enqueue_scripts","ali_add_styles");
    add_action("wp_enqueue_scripts","ali_add_scripts");


    // menus

    function ali_register_menus(){
        $args = array("navigation-bar" => "navigation bar");
        register_nav_menus($args);
    }

    add_action("init","ali_register_menus");

    // footer wedgets

    function ali_register_widgets() {

        $sidebar1 = array(
            "name" => "sidebar column 1",
            "id" => "sidebar-1",
            "before_widget" => '<div id="%1$s" class="widget sidebar-widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "<h3>",
            "after_title" => "</h3>"
        );

        $sidebar2 = array(
            "name" => "sidebar column 2",
            "id" => "sidebar-2",
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "<h3>",
            "after_title" => "</h3>"
        );

        $sidebar3 = array(
            "name" => "sidebar column 3",
            "id" => "sidebar-3",
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "<h3>",
            "after_title" => "</h3>"
        );

        $footer1 = array(
            "name" => "footer column 1",
            "id" => "footer-1",
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "<h3>",
            "after_title" => "</h3>"
        );
        $footer2 = array(
            "name" => "footer column 2",
            "id" => "footer-2",
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "<h3>",
            "after_title" => "</h3>"
        );
        $footer3 = array(
            "name" => "footer column 3",
            "id" => "footer-3",
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "<h3>",
            "after_title" => "</h3>"
        );

        register_sidebar($sidebar1);
        register_sidebar($sidebar2);
        register_sidebar($sidebar3);
        register_sidebar($footer1);
        register_sidebar($footer2);
        register_sidebar($footer3);
    };

    add_action("widgets_init","ali_register_widgets");

    // custome excerpt length

    function ali_custome_excerpt_length() {
        return 25;
    }

    add_action("excerpt_length","ali_custome_excerpt_length");

    // change the excerpt doted

    function ali_change_excerpt_doted() {
        return '...';
    }

    add_filter("excerpt_more","ali_change_excerpt_doted");
