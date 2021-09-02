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

    $wp_customize->add_setting( 'quienes_somos_quienes_somos_Directorio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'quienes_somos_quienes_somos_Directorio', array(
        'label' => __( ' Directorio', 'my_mc' ),
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
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js?v=1', false, null, true);

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
    wp_enqueue_style( 'museocabanaswebflow', get_template_directory_uri() . '/css/museo-cabanas-2020.webflow.css?v=35', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'my_mc_enqueue_scripts' );
endif;



add_action('admin_init', 'url_ticker_section');  

function url_ticker_section() {  
    add_settings_section(  
        'url_ticker_setting_section', // Section ID 
        'Seccion para cargar la url de la venta de las entradas', // Section Title
        'url_ticker_setting_section_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'url_ticket', // Option ID
        'Url: ', // Label
        'url_ticket_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'url_ticker_setting_section', // Name of our section
        array( // The $args
            'url_ticket' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 1
        'mailchip_data', // Option ID
        'Datos Formulario MailChip: ', // Label
        'mailchip_data_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'url_ticker_setting_section', // Name of our section
        array( // The $args
            'mailchip_data' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 1
        'ver_boton_compra_data', // Option ID
        'Visualizar Boton de Compra: ', // Label
        'ver_boton_compra_data_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'url_ticker_setting_section', // Name of our section
        array( // The $args
            'ver_boton_compra_data' // Should match Option ID
        )  
    ); 

    add_settings_field(
        'facebook_pixel_data',
        'Codigo Facebook Pixel: ',
        'facebook_pixel_data_cb',
        'general',
        'url_ticker_setting_section',
        array(
            'facebook_pixel_data'
        )  
    ); 

    add_settings_field(
        'google_analytics_data',
        'Codigo Google Analytics: ',
        'google_analytics_data_cb',
        'general',
        'url_ticker_setting_section',
        array(
            'google_analytics_data'
        )  
    ); 

    register_setting('general','url_ticket', 'esc_attr');
    register_setting('general','mailchip_data', 'esc_attr');
    register_setting('general','ver_boton_compra_data', 'esc_attr');
    register_setting('general','facebook_pixel_data', 'esc_attr');
    register_setting('general','google_analytics_data', 'esc_attr');
}

function url_ticker_setting_section_callback() { // Section Callback
    echo '<p>Ingrese la url donde estaran las ventas de las entradas</p>';  
}

function url_ticket_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function mailchip_data_callback($args){
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function ver_boton_compra_data_callback($args){
    $option = get_option($args[0]);
    if(!empty($option)){
        $checked = "checked='checked'";
    }else{
        $checked = "";
    }
    
    echo '<input type="checkbox" id="'. $args[0] .'" name="'. $args[0] .'" value="yes" '.$checked.' />';
}

function facebook_pixel_data_cb($args){
    $option = get_option($args[0]);
    echo '<textarea id="'. $args[0] .'" name="'. $args[0] .'">'.$option.'</textarea>';
}

function google_analytics_data_cb($args){
    $option = get_option($args[0]);
    echo '<textarea id="'. $args[0] .'" name="'. $args[0] .'">'.$option.'</textarea>';
}




//Post Type de Licitaciones
function actividades_postype(){
    register_post_type( 'actividades',
        array(
            'labels' => array(
                'name' => __('Actividades'),
                'singular_name' => __('Actividad')
            ),
            'public' => true,
            'rewrite' => array('slug' => 'actividades'),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
            'show_in_rest' => true,
            'show_in_menu' => true
        )
    );
}



add_action('init', 'actividades_postype');

//Post Type de Licitaciones
function peliculas_postype(){
    register_post_type( 'peliculas',
        array(
            'labels' => array(
                'name' => __('Peliculas'),
                'singular_name' => __('Pelicula')
            ),
            'public' => true,
            'has_archive'=> true,
            'rewrite' => array('slug' => 'peliculas'),
            'show_in_rest' => true
        )
    );
}



add_action('init', 'peliculas_postype');



//Post Type de Licitaciones
function licitaciones_postype(){
    register_post_type( 'licitaciones',
        array(
            'labels' => array(
                'name' => __('Licitaciones'),
                'singular_name' => __('Licitacion')
            ),
            'public' => true,
            'has_archive'=> true,
            'rewrite' => array('slug' => 'licitaciones'),
            'show_in_rest' => true
        )
    );
}



add_action('init', 'licitaciones_postype');


add_filter('licitaciones_columns', 'add_year_column');

function add_year_column($columns) {
  $new = array();

  print_r($columns);
  /*foreach($columns as $key => $title) {
    if ($key=='date') 
      $new['book'] = 'Associated Book(s)';
    $new[$key] = $title;
  }
  return $new;*/
}


//Post Type de Licitaciones
function directorio_postype(){
    register_post_type( 'directorios',
        array(
            'labels' => array(
                'name' => __('Directorios'),
                'singular_name' => __('Directorio')
            ),
            'public' => true,
            'has_archive'=> true,
            'rewrite' => array('slug' => 'directorios'),
            'show_in_rest' => true
        )
    );
}

add_action('init', 'directorio_postype');



//Post Type de Licitaciones
function galeria_home_postype(){
    register_post_type( 'galeria_home',
        array(
            'labels' => array(
                'name' => __('Galerias Home'),
                'singular_name' => __('Galeria Home')
            ),
            'public' => true,
            'has_archive'=> true,
            'rewrite' => array('slug' => 'galeria_home'),
            'show_in_rest' => true,
            'show_in_menu' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        )
    );
}

add_action('init', 'galeria_home_postype');


function licitaciones_add_custom_box() {
    $screens = [ 'licitaciones' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'licitaciones_box_id',                 // Unique ID
            'Ano y Archivo de la Licitacion',      // Box title
            'licitaciones_custom_box_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}

function licitaciones_custom_box_html( $post ) {
    wp_nonce_field(plugin_basename(__FILE__), 'licitaciones_file_nonce');

    $year = get_post_meta( $post->ID, 'licitaciones_year', true );
    $code = get_post_meta( $post->ID, 'licitaciones_code', true );
    $pdf_licitacion = get_post_meta( $post->ID, 'licitaciones_file', true );
    
    ?>
    <label for="licitaciones_year">Ano:</label>
    <input type="text" name="licitaciones_year" value="<?php echo @$year; ?>" id="licitaciones_year" />
    <hr />
    <label for="licitaciones_code">Codigo:</label>
    <input type="text" name="licitaciones_code" value="<?php echo @$code; ?>" id="licitaciones_code" />
    <hr />
    <label for="licitaciones_file">Archivo:</label>
    <input type="file" name="licitaciones_file" id="licitaciones_file" />
    <?php if(!empty($pdf_licitacion)): ?>
        <a style="border:1px solid blue; padding: 5px; text-decoration: none;" href="<?php echo $pdf_licitacion['url'] ?>" target="_blank">Ver Archivo</a>
    <?php endif; ?>
    <?php
}


add_action( 'add_meta_boxes', 'licitaciones_add_custom_box' );

function licitaciones_save_postdata( $post_id ) {
    $year = (!empty($_POST['licitaciones_year'])) ? $_POST['licitaciones_year'] : '' ;
    $code = (!empty($_POST['licitaciones_code'])) ? $_POST['licitaciones_code'] : '' ;

     if(!empty($_FILES['licitaciones_file']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['licitaciones_file']['name']));
        $uploaded_type = $arr_file_type['type'];
        
        if(in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['licitaciones_file']['name'], null, file_get_contents($_FILES['licitaciones_file']['tmp_name']));
            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
            } else {
                update_post_meta($post_id, 'licitaciones_file', $upload);
            }
        }
        else {
            wp_die("The file type that you've uploaded is not a PDF.");
        }
    }
    
    update_post_meta($post_id, 'licitaciones_year', $year);
    update_post_meta($post_id, 'licitaciones_code', $code);
}

add_action( 'save_post', 'licitaciones_save_postdata' );

function update_edit_form() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form');


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
