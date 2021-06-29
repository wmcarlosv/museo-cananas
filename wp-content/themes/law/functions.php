<?php
if ( ! function_exists( 'my_law_setup' ) ) :

function my_law_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'my_law', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'my_law' ),
        'social'  => __( 'Social Links Menu', 'my_law' ),
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
endif; // my_law_setup


if ( ! function_exists( 'my_law_init' ) ) :

function my_law_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('cases', array(
        'labels' =>
            array(
                'name' => __( 'cases', 'my_law' ),
                'singular_name' => __( 'cases', 'my_law' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
        'show_in_menu' => true
    ));

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // my_case_setup

add_action( 'after_setup_theme', 'my_law_setup' );


if ( ! function_exists( 'my_law_init' ) ) :

function my_law_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /*register_post_type('contact', array(
        'labels' =>
            array(
                'name' => __( 'contacts', 'my_law' ),
                'singular_name' => __( 'contact', 'my_law' )
            ),
        'public' => false,
        'supports' => array( 'title', 'editor', 'author' ),
        'show_in_rest' => false,
        'show_ui' => true,
        'show_in_menu' => true
    ));*/

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // my_law_setup

add_action( 'init', 'my_law_init' );


if ( ! function_exists( 'my_law_custom_image_sizes_names' ) ) :

function my_law_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'my_law_custom_image_sizes_names' );
endif;// my_law_custom_image_sizes_names



if ( ! function_exists( 'my_law_widgets_init' ) ) :

function my_law_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'languages switcher', 'my_law' ),
        'id' => 'languages_switcher',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'my_law_widgets_init' );
endif;// my_law_widgets_init



if ( ! function_exists( 'my_law_customize_register' ) ) :

function my_law_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'our_figures', array(
        'title' => __( 'our_figures', 'my_law' )
    ));

    $wp_customize->add_section( 'home', array(
        'title' => __( 'home', 'my_law' )
    ));

    $wp_customize->add_section( 'legal', array(
        'title' => __( 'legal', 'my_law' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'HEADER KEY IMPRESSIONS', array(
        'type' => 'theme_mod',
        'default' => __( 'KEY IMPRESSIONS', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'HEADER KEY IMPRESSIONS', array(
        'label' => __( 'Header Box Number One', 'my_law' ),
        'type' => 'title',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'KEY IMPRESSIONS', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'KEY IMPRESSIONS', array(
        'label' => __( 'Text Box Number one', 'my_law' ),
        'type' => 'textarea',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'HEADER YEARS OF EXPERIENCE', array(
        'type' => 'theme_mod',
        'default' => __( 'YEARS OF EXPERIENCE', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));


    $wp_customize->add_control( 'HEADER YEARS OF EXPERIENCE', array(
        'label' => __( 'Header Box Number two', 'my_law' ),
        'type' => 'title',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'YEARS OF EXPERIENCE', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));


    $wp_customize->add_control( 'YEARS OF EXPERIENCE', array(
        'label' => __( 'Text Box Number two', 'my_law' ),
        'type' => 'textarea',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'HEADER SUCCESSFUL CASES', array(
        'type' => 'theme_mod',
        'default' => __( 'SUCCESSFUL CASES', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'HEADER SUCCESSFUL CASES', array(
        'label' => __( 'Header Box Number Three', 'my_law' ),
        'type' => 'title',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'SUCCESSFUL CASES', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'SUCCESSFUL CASES', array(
        'label' => __( 'Text Box Number Three', 'my_law' ),
        'type' => 'textarea',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'header text four', array(
        'type' => 'theme_mod',
        'default' => __( 'HOURS WORKED', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'header text four', array(
        'label' => __( 'Header Box Number Four', 'my_law' ),
        'type' => 'title',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'text four', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'text four', array(
        'label' => __( 'Text Box Number Four', 'my_law' ),
        'type' => 'textarea',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'HEADER NUMBER OF CASES', array(
        'type' => 'theme_mod',
        'default' => __( 'NUMBER OF CASES', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'HEADER NUMBER OF CASES', array(
        'label' => __( 'Header Box Number Five', 'my_law' ),
        'type' => 'title',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'NUMBER OF CASES', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'NUMBER OF CASES', array(
        'label' => __( 'Text Box Number Five', 'my_law' ),
        'type' => 'textarea',
        'section' => 'our_figures'
    ));

    $wp_customize->add_setting( 'FIGURES-IMAGE', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'FIGURES-IMAGE', array(
        'label' => __( 'UPLOAD-IMAGE', 'my_law' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'our_figures'
    ) ) );

    $wp_customize->add_setting( 'home-header', array(
        'type' => 'theme_mod',
        'default' => __( 'with us you can trust attorney at law', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'home-header', array(
        'label' => __( 'home header', 'my_law' ),
        'type' => 'text',
        'section' => 'home'
    ));

    $wp_customize->add_setting( 'home-paragraphe', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod', 'my_law' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'home-paragraphe', array(
        'label' => __( 'home paragraphe', 'my_law' ),
        'type' => 'textarea',
        'section' => 'home'
    ));

    $wp_customize->add_setting( 'Firm-text', array(
        'type' => 'theme_mod',
        'default' => 'Buis Bürgi AG is an independent Zurich based law firm focusing on commercial law and with a strong international practice. Our lawyers advise corporate and private clients mainly in commercial and financial law and provide dispute resolution services in these fields in particular.<br><br> We are a dynamic team deeply committed to implementing the needs of our clients.<br><br> The law firm «Buis Bürgi AG» was established by partners ofhe lawfirm «De Capitani Kronauer Buis» in 2008.',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'Firm-text', array(
        'label' => __( 'Firm-text', 'my_law' ),
        'type' => 'textarea',
        'section' => 'home'
    ));

    $wp_customize->add_setting( 'our legal', array(
        'type' => 'theme_mod',
        'default' => 'The legal fees of Buis Bürgi AG are normally based on time spent. The rate per hour depends on the amount involved in the matter and the complexity of the case. Expenses are charged separately. The fees and expenses are subject to Swiss value added tax of 7.7% unless there is a tax exempt export of services.<br><br>Due to its efficient cost structure, Buis Bürgi AG is in a position to offer competitive rates.',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'our legal', array(
        'label' => __( 'our legal', 'my_law' ),
        'type' => 'textarea',
        'section' => 'legal'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'my_law_customize_register' );
endif;// my_law_customize_register


if ( ! function_exists( 'my_law_enqueue_scripts' ) ) :
    function my_law_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'select' );
    wp_enqueue_script( 'select', get_template_directory_uri() . '/js/select2.min.js', false, null, true);

    wp_deregister_script( 'javascript' );
    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'select' );
    wp_enqueue_style( 'select', get_template_directory_uri() . '/css/select2.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_template_directory_uri() . '/css/admin.css', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'my_law_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin*/
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";
require_once "inc/wp_simple_form_mailer.php";

    /* Pinegrow generated Include Resources End */
    /* logo */
    function themename_custom_logo_setup() {
     $defaults = array(
     'height'      => 60,
     'width'       => 220,
     'flex-height' => true,
     'flex-width'  => true,
     'header-text' => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
     );
     add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

    /* expert */

    function keep_my_links($text) {
     global $post;
    if ( '' == $text ) {
       $text = get_the_content('');
       $text = apply_filters('the_content', $text);
       $text = str_replace('\]\]\>', ']]&gt;', $text);
       $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
       $text = strip_tags($text, '<a>');
     }
     return $text;
    }
    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'keep_my_links');

    /* tags & categories in pages */
    function add_categories_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
    }
    add_action( 'init', 'add_categories_to_pages' );


    function add_tags_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    }
    add_action( 'init', 'add_tags_to_pages');

    /*  hide button */

    function remove_header() {
       if (!in_category( 'home')) {
          return;
       }
       $css_to_hide_header = <<<EOT
       <style>
        .btn-top{
          display:none
        }
            </style>
       EOT;
       echo $css_to_hide_header;
    }
    add_action('wp_head', 'remove_header');


add_action( 'after_setup_theme', 'my_law_setup' );




?>
