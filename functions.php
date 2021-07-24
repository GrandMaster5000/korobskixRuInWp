<?php
function korobskix_scripts() {
    if(is_page( '178' )){
        wp_enqueue_style( 'fmc-style' , get_template_directory_uri() . '/assets/styles/page-fmc.css');
        wp_deregister_style( 'korobskix-style' );
        wp_deregister_style( 'uber-style' );
        wp_deregister_style( 'pulse-style' );
        wp_deregister_script('korobskix-script');
        wp_deregister_script('uber-script');
        wp_deregister_script('pulse-script');
        wp_deregister_style( 'anim-style' );
        wp_deregister_script('wow-script');
        wp_deregister_script('slick-script');
        wp_deregister_script('jquery-mirgate');
        wp_enqueue_script( 'fmc-script' , get_template_directory_uri() . '/assets/js/fmc.js', array(), null , true );
    }
    if(is_page( '173' )){
        wp_enqueue_style( 'pulse-style' , get_template_directory_uri() . '/assets/styles/page-pulse.css');
        wp_enqueue_style( 'anim-style' , 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        wp_deregister_style( 'korobskix-style' );
        wp_deregister_style( 'uber-style' );
        wp_deregister_style( 'fmc-style' );
        wp_deregister_script('korobskix-script');
        wp_deregister_script('fmc-script');
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery','https://code.jquery.com/jquery-3.6.0.min.js' );
        wp_enqueue_script('jquery');
        wp_register_script( 'jquery-mirgate' , 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
        wp_enqueue_script('jquery-mirgate');
        wp_enqueue_script( 'pulse-script' , get_template_directory_uri() . '/assets/js/pulse.js', array('jquery' , 'wow-script'), null , true );
        wp_enqueue_script( 'wow-script' , get_template_directory_uri() . '/assets/js/wow.min.js', array(), null , true );
        wp_enqueue_script( 'slick-script' , get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null , true );
    }
    if(is_page( '175' )){
        wp_enqueue_style( 'uber-style' , get_template_directory_uri() . '/assets/styles/page-uber.css');
        wp_deregister_style( 'korobskix-style' );
        wp_deregister_style( 'pulse-style' );
        wp_deregister_style( 'fmc-style' );
        wp_deregister_style( 'anim-style' );
        wp_deregister_script('korobskix-script');
        wp_deregister_script('fmc-script');
        wp_deregister_script('pulse-script');
        wp_deregister_script('wow-script');
        wp_deregister_script('slick-script');
        wp_deregister_script('jquery-mirgate');
        wp_enqueue_script( 'uber-script' , get_template_directory_uri() . '/assets/js/uber.js', array(), null , true );
    }
    if(is_page( '2' )){
        wp_enqueue_style('korobskix-style' , get_stylesheet_uri());
        wp_deregister_style( 'uber-style' );
        wp_deregister_style( 'pulse-style' );
        wp_deregister_style( 'anim-style' );
        wp_deregister_style( 'fmc-style' );
        wp_deregister_script('fmc-script');
        wp_deregister_script('pulse-script');
        wp_deregister_script('wow-script');
        wp_deregister_script('slick-script');
        wp_deregister_script('jquery-mirgate');
        wp_enqueue_script( 'korobskix-script' , get_template_directory_uri() . '/assets/js/script.js', array(), null , true );
    }
};
add_action('wp_enqueue_scripts' , 'korobskix_scripts');

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
?>