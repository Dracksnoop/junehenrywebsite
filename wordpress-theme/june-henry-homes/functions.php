<?php
/**
 * June Henry Homes theme setup.
 */

function jhh_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    register_nav_menus( array(
        'primary' => __( 'Header pills', 'june-henry-homes' ),
        'mobile'  => __( 'Mobile menu', 'june-henry-homes' ),
        'footer'  => __( 'Footer explore', 'june-henry-homes' ),
    ) );
}
add_action( 'after_setup_theme', 'jhh_setup' );

function jhh_assets() {
    $uri = get_template_directory_uri();
    $ver = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'jhh-fonts',
        'https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&family=Pinyon+Script&family=Pinyon+Script&family=Ephesis&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'jhh-base', $uri . '/css/base.css', array(), $ver );
    wp_enqueue_style( 'jhh-sections', $uri . '/css/sections.css', array( 'jhh-base' ), $ver );
    wp_enqueue_style( 'jhh-pages', $uri . '/css/pages.css', array( 'jhh-base' ), $ver );
    wp_enqueue_style( 'jhh-style', get_stylesheet_uri(), array( 'jhh-base' ), $ver );
    wp_enqueue_script( 'jhh-main', $uri . '/js/main.js', array(), $ver, true );
}
add_action( 'wp_enqueue_scripts', 'jhh_assets' );

/**
 * Text for the bar above the navigation. Edit it under Appearance then Customise.
 */
function jhh_bar_text() {
    return get_theme_mod( 'jhh_bar_text', 'Only 6&#8211;8 guests per home' );
}
function jhh_bar_place() {
    return get_theme_mod( 'jhh_bar_place', 'St. Ann, Jamaica' );
}
function jhh_customize( $wp_customize ) {
    $wp_customize->add_section( 'jhh_bar', array( 'title' => __( 'Top bar', 'june-henry-homes' ), 'priority' => 30 ) );
    $wp_customize->add_setting( 'jhh_bar_text', array( 'default' => 'Only 6&#8211;8 guests per home', 'sanitize_callback' => 'wp_kses_post' ) );
    $wp_customize->add_control( 'jhh_bar_text', array( 'label' => __( 'Left text', 'june-henry-homes' ), 'section' => 'jhh_bar', 'type' => 'text' ) );
    $wp_customize->add_setting( 'jhh_bar_place', array( 'default' => 'St. Ann, Jamaica', 'sanitize_callback' => 'wp_kses_post' ) );
    $wp_customize->add_control( 'jhh_bar_place', array( 'label' => __( 'Right text', 'june-henry-homes' ), 'section' => 'jhh_bar', 'type' => 'text' ) );
}
add_action( 'customize_register', 'jhh_customize' );

/**
 * Journal excerpts: one sentence is enough for the cards.
 */
function jhh_excerpt_length( $length ) { return 32; }
add_filter( 'excerpt_length', 'jhh_excerpt_length' );
function jhh_excerpt_more( $more ) { return '&#8230;'; }
add_filter( 'excerpt_more', 'jhh_excerpt_more' );
