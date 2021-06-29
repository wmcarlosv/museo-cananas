<?php
if ( ! function_exists( 'my_mc_setup' ) ) :

function my_mc_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'my_mc', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'my_mc' ),
        'social'  => __( 'Social Links Menu', 'my_mc' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */

/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */

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

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // my_mc_setup

add_action( 'after_setup_theme', 'my_mc_setup' );


if ( ! function_exists( 'my_mc_init' ) ) :

function my_mc_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('colecciones', array(
        'labels' =>
            array(
                'name' => __( 'colecciones', 'my_mc' ),
                'singular_name' => __( 'coleccione', 'my_mc' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
        'show_in_menu' => true
    ));

    register_post_type('subscription', array(
        'labels' =>
            array(
                'name' => __( 'subscriptions', 'my_mc' ),
                'singular_name' => __( 'subscription', 'my_mc' )
            ),
        'public' => false,
        'supports' => array( 'title', 'editor', 'author' ),
        'show_in_rest' => false,
        'show_ui' => true,
        'show_in_menu' => true
    ));

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // my_mc_setup

add_action( 'init', 'my_mc_init' );


if ( ! function_exists( 'my_mc_custom_image_sizes_names' ) ) :

function my_mc_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'my_mc_custom_image_sizes_names' );
endif;// my_mc_custom_image_sizes_names



if ( ! function_exists( 'my_mc_widgets_init' ) ) :

function my_mc_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'translate', 'my_mc' ),
        'id' => 'my_lang',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'my_mc_widgets_init' );
endif;// my_mc_widgets_init



if ( ! function_exists( 'my_mc_customize_register' ) ) :

function my_mc_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'redes_sociales', array(
        'title' => __( 'redes sociales', 'my_mc' )
    ));

    $wp_customize->add_section( 'quienes_somos', array(
        'title' => __( 'quienes somos', 'my_mc' )
    ));

    $wp_customize->add_section( 'contact_info', array(
        'title' => __( 'contact info', 'my_mc' )
    ));

    $wp_customize->add_section( 'recinto_home', array(
        'title' => __( 'image recinto home', 'my_mc' )
    ));

    $wp_customize->add_section( 'redes_sociales', array(
        'title' => __( 'redes sociales', 'my_mc' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'redes_sociales_redes_sociales_facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'redes_sociales_redes_sociales_facebook', array(
        'label' => __( 'facebook', 'my_mc' ),
        'type' => 'url',
        'section' => 'redes_sociales'
    ));

    $wp_customize->add_setting( 'redes_sociales_redes_sociales_instagram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'redes_sociales_redes_sociales_instagram', array(
        'label' => __( 'instagram', 'my_mc' ),
        'type' => 'url',
        'section' => 'redes_sociales'
    ));

    $wp_customize->add_setting( 'redes_sociales_redes_sociales_twitter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'redes_sociales_redes_sociales_twitter', array(
        'label' => __( 'twitter', 'my_mc' ),
        'type' => 'url',
        'section' => 'redes_sociales'
    ));

    $wp_customize->add_setting( 'redes_sociales_redes_sociales_youtube', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'redes_sociales_redes_sociales_youtube', array(
        'label' => __( 'youtube', 'my_mc' ),
        'type' => 'url',
        'section' => 'redes_sociales'
    ));

    $wp_customize->add_setting( 'redes_sociales_redes_sociales_spotify', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'redes_sociales_redes_sociales_spotify', array(
        'label' => __( 'spotify', 'my_mc' ),
        'type' => 'url',
        'section' => 'redes_sociales'
    ));

    $wp_customize->add_setting( 'quienes_somos_quienes_somos_Misión', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'quienes_somos_quienes_somos_Misión', array(
        'label' => __( 'Misión', 'my_mc' ),
        'type' => 'url',
        'section' => 'quienes_somos'
    ));

    $wp_customize->add_setting( 'quienes_somos_quienes_somos_organigrama', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'quienes_somos_quienes_somos_organigrama', array(
        'label' => __( ' organigrama', 'my_mc' ),
        'type' => 'url',
        'section' => 'quienes_somos'
    ));

    $wp_customize->add_setting( 'contact_info_address_info', array(
        'type' => 'theme_mod',
        'default' => __( 'Cabañas #8, Plaza Tapatía Zona Centro', 'my_mc' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contact_info_address_info', array(
        'label' => __( 'address Info', 'my_mc' ),
        'type' => 'textarea',
        'section' => 'contact_info'
    ));

    $wp_customize->add_setting( 'contact_info_Fax Number', array(
        'type' => 'theme_mod',
        'default' => __( '33 3668 16 42 - Ext. 31014', 'my_mc' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contact_info_Fax Number', array(
        'label' => __( 'Fax Number', 'my_mc' ),
        'type' => 'text',
        'section' => 'contact_info'
    ));

    $wp_customize->add_setting( 'contact_info_Phone Number', array(
        'type' => 'theme_mod',
        'default' => __( '33 3668 16 45', 'my_mc' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contact_info_Phone Number', array(
        'label' => __( 'Phone Number', 'my_mc' ),
        'type' => 'text',
        'section' => 'contact_info'
    ));

    $wp_customize->add_setting( 'recinto_home_recinto ', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'recinto_home_recinto ', array(
        'label' => __( 'home recinto', 'my_mc' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'recinto_home'
    ) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'my_mc_customize_register' );
endif;// my_mc_customize_register


if ( ! function_exists( 'my_mc_enqueue_scripts' ) ) :
    function my_mc_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'webfont' );
    wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', false, null, false);

    wp_register_script( 'inline-script-1', '', [], '', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'WebFont.load({
        google: {
          families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Cardo:regular,italic,700"]
        }
      });');

    wp_register_script( 'inline-script-2', '', [], '', false );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);');

    wp_deregister_script( 'jquerydcefc' );
    wp_enqueue_script( 'jquerydcefc', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ffd13e13154a6a235af4bf2', false, null, true);

    wp_deregister_script( 'webflow' );
    wp_enqueue_script( 'webflow', get_template_directory_uri() . '/js/webflow.js', false, null, true);
    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */
    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css', false, null, 'all');

    wp_enqueue_style( 'wp-webflow-compatibility', get_template_directory_uri().'/css/wp-webflow.css', false, null);

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'webflow' );
    wp_enqueue_style( 'webflow', get_template_directory_uri() . '/css/webflow.css', false, null, 'all');

    wp_deregister_style( 'museocabanaswebflow' );
    wp_enqueue_style( 'museocabanaswebflow', get_template_directory_uri() . '/css/museo-cabanas-2020.webflow.css?v=1', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'my_mc_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";
require_once "inc/wp_simple_form_mailer.php";

    /* Pinegrow generated Include Resources End */
?>
