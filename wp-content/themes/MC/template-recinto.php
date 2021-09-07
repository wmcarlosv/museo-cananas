<?php
/*
 Template Name: recinto page
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="nav-container">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Logo-rojo.svg" loading="lazy" height="" width="150" alt="" class="main-logo mobile">
    <div data-w-id="20c92c8a-de61-cf16-b65e-7a6aa147bdad" class="menu-icon-wrapper">
        <div data-w-id="dcc06091-b988-2c01-f5b4-b8e9dc9c6251" data-animation-type="lottie" data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/documents/4370-menu-button-190218a.json" data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="0.5333333333333333" data-duration="0"></div>
    </div>
    <div class="nav-content-wrapper">

        <a href="<?php echo esc_url( home_url() ); ?>" aria-current="page" class="w-inline-block w--current"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Logo-rojo.svg" loading="lazy" height="" width="150" alt="" class="main-logo"></a>
        <div class="main-nav ">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="current_page_item menu-item menu-item-610 menu-item-home menu-item-object-page menu-item-type-post_type page-item-609 page_item {CLASSES}"><a {ATTRS}>{TITLE}</a></li>';
                    PG_Smart_Walker_Nav_Menu::$options['current_class'] = 'current-menu-item';
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
                        'walker' => new PG_Smart_Walker_Nav_Menu()
                ) ); ?>
            <?php endif; ?>
        </div>
        <!-- #main-nav -->
        <div class="nav-items-wrapper-language">
         <?php if ( is_active_sidebar( 'my_lang' ) ) : ?>
              <?php dynamic_sidebar( 'my_lang' ); ?>
          <?php endif; ?>
      </div>
    </div>
</div>
<div class="horarios-section">
    <a data-w-id="22e93460-a2ef-c131-1368-f3365d755790" target="_blank" href="<?php echo get_option('url_ticket'); ?>" target="_blank" class="bot-n-tickets w-inline-block"> <div class="boton-tickets-text">
            <?php _e( 'Compra', 'my_mc' ); ?>
            <br>
            <?php _e( 'tus', 'my_mc' ); ?>
            <br>
            <?php _e( 'entradas', 'my_mc' ); ?>
            <br>
            <?php _e( 'aquí', 'my_mc' ); ?>
        </div> </a>
    <div class="mycontainer cine-container">
        <div class="main-title-wrapper cine">
            <h1 class="main-title"><?php the_title(); ?></h1>
        </div>
        <div class="historia-container">
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_0_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_0_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_1_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_1_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_2_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_2_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_3_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_3_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_4_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_4_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_5_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_5_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_6_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_6_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_7_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_7_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
            <div class="div-block-5">
                <h2 class="numeros-historia"><?php echo get_post_meta( get_the_ID(), 'numeros_historia_8_year', true ); ?></h2>
                <div class="div-block-6">
                    <p class="historia-parrafo"><?php echo get_post_meta( get_the_ID(), 'historia_parrafo_8_parrafo', true ); ?></p>
                    <div class="div-block-7"></div>
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <?php 
                $imagen_1 = get_post_meta(get_the_ID(), 'imagen_1', true); 
            ?>
            <br />
            <img src="<?=wp_get_attachment_image_src($imagen_1,array('1320','821'))[0]?>" loading="lazy" sizes="(max-width: 479px) 46vw, (max-width: 767px) 45vw, (max-width: 991px) 46vw, 47vw" alt="" class="image-7">
        </div>
        <div class="images-gallery-container-orozco">
            <?php
                $bottom_galery = get_post_meta(get_the_ID(), 'gallery_bottom', true);

                for($i=0; $i < count($bottom_galery); $i++){
                    $imagen = wp_get_attachment_image_src($bottom_galery[$i]);
            ?>
            <div class="div-block-4">
                <img src="<?php echo $imagen[0]; ?>" loading="lazy" alt="" class="image-6">
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<!--<div class="escuelas-section" style="padding-bottom: 50px">
    <div class="mycontainer cine-container">
        <div class="main-title-wrapper cine">
            <h1 class="main-title"><?php _e( 'Patrimonio de la Humanidad', 'my_mc' ); ?></h1>
        </div>
        <div class="taquilla-container">
            <div id="w-node-a183232a-1d6d-c331-d893-f022152a96a0-aae5941d" class="col-wrapper">
                <div class="taquilla-texto" style="white-space:pre-line"><?php echo get_post_meta( get_the_ID(), 'patrimonio_de_la_humanidad', true ); ?></div>
            </div>
        </div>
    </div>
</div>-->
<div data-w-id="d98485cd-5fe5-c0e7-2f81-cafc3bb95cb8" class="hp-fourth-section">
    <div class="mycontainer orozco">

        <!--<div style="padding-top:56.17021276595745%; margin-bottom: 100px;" class="w-embed-youtubevideo youtube">
            <iframe src="<?php echo get_post_meta( get_the_ID(), 'video', true ); ?>" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:740px;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen="">
                <?php echo get_post_meta( get_the_ID(), 'video', true ); ?>
            </iframe>
        </div>-->

        <div class="orozco-hp-wrapper" id="orozco-zone">
            <div class="huge-orozco-text">
                <?php _e( 'Orozco', 'my_mc' ); ?>
            </div>
            <div class="orozco-image-wrapper">
                <?php echo PG_Image::getPostImage( null, 'full', array(
                        'class' => 'orozco-image',
                        'loading' => 'lazy',
                        'sizes' => '(max-width: 479px) 100vw, (max-width: 767px) 600px, (max-width: 991px) 800px, 1333.328125px'
                ), 'both', null ) ?>
            </div>
            <div class="orozco-info-container first">
                <div class="columna-info-orozco">
                    <div class="subtitulo-imagen-orozco">
                        <?php _e( 'El Hombre de fuego', 'my_mc' ); ?>
                    </div>
                    <div class="subtitulo-imagen-orozco">/</div>
                    <div class="subtitulo-imagen-orozco">
                        <?php _e( 'Colección Permanente', 'my_mc' ); ?>
                    </div>
                </div>
            </div>
            <div class="orozco-info-container">
                <?php
                $content = the_content();
                    apply_filters('the_content', $content); 

                  ?>
            </div>
            <div class="images-gallery-container-orozco">
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_0_gallery', true ), 'full' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_0_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_1_gallery', true ), 'large' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_1_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_2_gallery', true ), 'large' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_2_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_3_gallery', true ), 'full' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_3_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_4_gallery', true ), 'large' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_4_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_5_gallery', true ), 'large' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_5_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_6_gallery', true ), 'large' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_6_caption', true ); ?>
                    </div>
                </div>
                <div class="div-block-4">
                    <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'gallery_image_7_gallery', true ), 'large' ) ?>" loading="lazy" alt="" class="image-6">
                    <div class="text-block-2">
                        <?php echo get_post_meta( get_the_ID(), 'gallery_caption_7_caption', true ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="mycontainer footer">
        <div class="footer-wrapper">
            <div id="w-node-b407221c-e062-a29b-b2c2-4e7144ef7ef4-44ef7ef1" class="newsletter-wrapper">
                <div class="w-form" id="pgpb_contact_form_mailer_id">
                    <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                    <?php $mailer->process( array(
                            'form_id' => 'pgpb_contact_form_mailer_id',
                            'save_to_post_type' => true,
                            'post_type' => 'subscription'
                    ) ); ?>
                    <?php if( !$mailer->processed || $mailer->error) : ?>
                        <form <?php echo get_option('mailchip_data'); ?>>
                            <label for="email-2" class="footer-list-title">
                                <?php _e( '¿Quieres recibir información del Museo Cabañas? ¡Suscríbete!', 'my_mc' ); ?>
                            </label>
                            <div class="text-field-container">
                                <input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="<?php _e( 'Correo Electrónico', 'my_mc' ); ?>" id="email-2" required="" value="<?php echo ( isset( $_POST['email-2'] ) ? $_POST['email-2'] : '' ); ?>">
                                <input type="submit" value="<?php _e( 'Suscribirte', 'my_mc' ); ?>" data-wait="Please wait..." class="submit-button w-button" name="pgpb_contact_form_mailer_id_2">
                            </div>
                            <input type="hidden" name="pgpb_contact_form_mailer_id" value="1"/>
                        </form>
                    <?php endif; ?>
                    <?php if( $mailer->processed ) : ?>
                        <?php echo $mailer->message; ?>
                    <?php endif; ?>
                    <div class="success-message w-form-done">
                        <div class="text-block-3">
                            <?php _e( '¡Gracias por Suscribirte!', 'my_mc' ); ?>
                        </div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div class="text-block-4">
                            <?php _e( '¡Oops! Parece que algo salio mal.', 'my_mc' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <ol id="w-node-b407221c-e062-a29b-b2c2-4e7144ef7f02-44ef7ef1" role="list" class="footer-links-list w-list-unstyled">
                <li class="list-item">
                    <h6 class="footer-list-title"><?php _e( 'Redes Sociales:', 'my_mc' ); ?></h6>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_theme_mod( 'redes_sociales_redes_sociales_facebook', '#' ); ?>" class="footer-link"><?php _e( 'Facebook', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_theme_mod( 'redes_sociales_redes_sociales_instagram', '#' ); ?>" class="footer-link"><?php _e( 'Instagram', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_theme_mod( 'redes_sociales_redes_sociales_twitter', '#' ); ?>" class="footer-link"><?php _e( 'Twitter', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_theme_mod( 'redes_sociales_redes_sociales_youtube', '#' ); ?>" class="footer-link"><?php _e( 'YouTube', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_theme_mod( 'redes_sociales_redes_sociales_spotify', '#' ); ?>" class="footer-link"><?php _e( 'Spotify', 'my_mc' ); ?></a>
                </li>
            </ol>
            <ol id="w-node-b407221c-e062-a29b-b2c2-4e7144ef7f0f-44ef7ef1" role="list" class="footer-links-list w-list-unstyled">
                <li class="list-item">
                    <h6 class="footer-list-title"><?php _e( 'Quienes Somos:', 'my_mc' ); ?></h6>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_permalink(get_page_by_title("Misión")); ?>" class="footer-link"><?php _e( 'Misión', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_permalink(get_page_by_title("Directorio")); ?>" class="footer-link"><?php _e( 'Directorio', 'my_mc' ); ?></a>
                </li>
            </ol>
            <ol id="w-node-b407221c-e062-a29b-b2c2-4e7144ef7f19-44ef7ef1" role="list" class="footer-links-list w-list-unstyled">
                <li class="list-item">
                    <h6 class="footer-list-title"><?php _e( 'Contacto:', 'my_mc' ); ?></h6>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php echo get_theme_mod( 'contact_info_address_info', __( 'Cabañas #8, Plaza Tapatía Zona Centro', 'my_mc' ) ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php echo get_theme_mod( 'contact_info_Fax Number', __( '33 3668 16 42 - Ext. 31014', 'my_mc' ) ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php echo get_theme_mod( 'contact_info_Phone Number', __( '33 3668 16 45', 'my_mc' ) ); ?></a>
                </li>
            </ol>
        </div>
    </div>
</div>

<?php get_footer(); ?>
