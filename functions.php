<?php
if ( ! function_exists( 'st2_setup' ) ) :

function st2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'blog', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'st2' ),
        'social'  => __( 'Social Links Menu', 'st2' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // st2_setup

add_action( 'after_setup_theme', 'st2_setup' );


if ( ! function_exists( 'st2_init' ) ) :

function st2_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // st2_setup

add_action( 'init', 'st2_init' );


if ( ! function_exists( 'st2_widgets_init' ) ) :

function st2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Hero Slider', 'blog' ),
        'id' => 'hero',
        'description' => 'Hero slider area. Place two or more widgets here and they will slide!',
        'before_widget' => '<div class="carousel-item">',
        'after_widget' => '</div>',
        'before_title' => ' ',
        'after_title' => ' '
    ) );

    register_sidebar( array(
        'name' => __( 'Hero Canvas', 'blog' ),
        'id' => 'herocanvas',
        'description' => 'Full size canvas hero area for Bootstrap and other custom HTML markup',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ) );

    register_sidebar( array(
        'name' => __( 'Top Full', 'blog' ),
        'id' => 'statichero',
        'description' => 'Full top widget with dynamic grid',
        'before_widget' => '<div id="%1$s" class="static-hero-widget %2$s '. st2_slbd_count_widgets( 'statichero' ) .'">',
        'after_widget' => '</div><!-- .static-hero-widget -->',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Left Sidebar', 'blog' ),
        'id' => 'left-sidebar',
        'description' => 'Left Sidebar widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'blog' ),
        'id' => 'right-sidebar',
        'description' => 'Right Sidebar widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Bottom Full', 'blog' ),
        'id' => 'footerfull',
        'description' => 'Full bottom widget with dynamic grid',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s '. st2_slbd_count_widgets( 'footerfull' ) .'">',
        'after_widget' => '</div><!-- .footer-widget -->',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Bottom Bottom', 'blog' ),
        'id' => 'footerbottom',
        'description' => 'Full bottom widget with dynamic grid',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s '. st2_slbd_count_widgets( 'footerfull' ) .'">',
        'after_widget' => '</div><!-- .footer-widget -->',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'st2_widgets_init' );
endif;// st2_widgets_init



if ( ! function_exists( 'st2_customize_register' ) ) :

function st2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'footer_settings', array(
        'title' => __( 'ST2 Footer Settings', 'blog' ),
        'description' => __( 'Footer Settings', 'blog' ),
        'priority' => '2'
    ));

    $wp_customize->add_section( 'header_settings', array(
        'title' => __( 'ST2 Header Settings', 'blog' ),
        'description' => __( 'Header Settings', 'blog' ),
        'priority' => '1'
    ));

    $wp_customize->add_section( 'theme_settings', array(
        'title' => __( 'ST2 Theme Settings', 'blog' ),
        'description' => __( 'Theme Settings > CAUTION: Work in Progress', 'blog' ),
        'priority' => '0'
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'show_jumbotron', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_jumbotron', array(
        'label' => __( 'Show Jumbotron', 'blog' ),
        'description' => __( 'Activate the Jumbotron. Note: It will be visible on ALL the theme templates. If you need a selective display, use the Hero slider or  Hero Canvas widgets and the Widget Logic plugin.', 'blog' ),
        'type' => 'checkbox',
        'section' => 'header_settings'
    ));

    $wp_customize->add_setting( 'jumbotron_bg_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_bg_color', array(
        'label' => __( 'Jumbotron Background color', 'blog' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'jumbotron_bg_image', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'jumbotron_bg_image', array(
        'label' => __( 'Jumbotron Background image', 'blog' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'jumbotron_heading_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_heading_color', array(
        'label' => __( 'Jumbotron Heading Color', 'blog' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'jumbotron_text_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_text_color', array(
        'label' => __( 'Jumbotron Paragraph Color', 'blog' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'show_left_sidebar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_left_sidebar', array(
        'label' => __( 'Show Left Sidebar', 'blog' ),
        'description' => __( 'Activate the Left Sidebar', 'blog' ),
        'type' => 'checkbox',
        'section' => 'theme_settings'
    ));

    $wp_customize->add_setting( 'show_right_sidebar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_right_sidebar', array(
        'label' => __( 'Show Right Sidebar', 'blog' ),
        'description' => __( 'Activate the Right Sidebar', 'blog' ),
        'type' => 'checkbox',
        'section' => 'theme_settings'
    ));

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Content', 'blog' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'st2_customize_register' );
endif;// st2_customize_register


if ( ! function_exists( 'st2_enqueue_scripts' ) ) :
    function st2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'carousel_init', get_template_directory_uri() . '/assets/js/carousel_init.js', null, null, true );

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', null, null, true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', null, null, true );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'theme' );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', false, null, 'all');

    wp_deregister_style( 'woocommerce' );
    wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'st2_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */

/* Don't add custom your custom snippets here, but use inc/custom.php */
/* ST2 Include Resources Begin */
require_once "inc/custom.php";

?>
