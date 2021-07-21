<?php
/*
 Template Name: home page
 Template Post Type: page
*/
?>
<?php get_header(); ?>
<style type="text/css">

    div#patrimonio p {
        display: none;
    }

    p.taquilla-texto, p.p1{
        display: block !important;
    }
</style>
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
<div class="hp-header-section">
    <div class="nav-spacer"></div>
    <div class="mycontainer header">
        <a data-w-id="2742f620-b5da-5a0c-b66e-5d44389ea04b" target="_blank" href="<?php echo get_option('url_ticket'); ?>" class="bot-n-tickets w-inline-block"> <div class="boton-tickets-text">
                <?php _e( 'Compra', 'my_mc' ); ?>
                <br>
                <?php _e( 'tus', 'my_mc' ); ?>
                <br>
                <?php _e( 'entradas', 'my_mc' ); ?>
                <br>
                <?php _e( 'aquí', 'my_mc' ); ?>
            </div> </a>
        <div data-delay="4000" data-animation="cross" data-autoplay="1" data-easing="ease-in-out-quad" data-duration="500" data-infinite="1" class="slider w-slider">
            <div class="w-slider-mask">
                <?php
                    $gallery_home = new WP_Query(array(
                        'post_type'=>'galeria_home'
                    ));
                 ?>
                <?php if ( $gallery_home->have_posts() ) : ?>
                    <?php while ( $gallery_home->have_posts() ) : $gallery_home->the_post(); ?>
                        <?php PG_Helper::rememberShownPost(); ?>
                        <div data-w-id="5c9df79f-71cd-1123-9ecf-71dfdd5c1eb5" <?php post_class( 'w-slide' ); ?> id="post-<?php the_ID(); ?>">
                            <div class="slider-wrapper">
                                <div class="slider-text-wrapper">
                                    <!--<div class="text-block-2">
                                        <?php echo get_post_meta(get_the_ID(), 'above_header', true); ?> 
                                    </div>-->
                                    <h1 class="heading"><?php the_title(); ?></h1>
                                    <?php

                                        the_field('fechas',);

                                    ?>
                                </div>
                                <div class="slider-image-wrapper">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    <?php echo PG_Image::getPostImage( null, 'full', array(
                                            'class' => 'slider-image',
                                            'loading' => 'lazy',
                                            'style' => '-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)',
                                            'sizes' => '(max-width: 991px) 100vw, 70vw'
                                    ), 'both', null ) ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_mc' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="left-arrow w-slider-arrow-left">
                <div class="icon-2 w-icon-slider-left"></div>
            </div>
            <div class="right-arrow w-slider-arrow-right">
                <div class="icon w-icon-slider-right"></div>
            </div>
            <div class="slide-nav w-slider-nav w-round"></div>
        </div>
    </div>
</div>
<div class="hp-second-section home">
    <div class="mycontainer second">
        <div class="exhibiciones-wrapper">
            <div class="subtitle">
                <?php _e( 'exhibiciones:', 'my_mc' ); ?>
            </div>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" <?php post_class( 'exhibicion-item w-inline-block' ); ?> id="post-<?php the_ID(); ?>"> <div class="exhibicion-text-wrapper">
                            <div class="text-block-2">
                                  <?php

                                        the_field('above_header',);

                                    ?>
                            </div>
                            <h3 class="heading exhibicion"><?php the_title(); ?></h3>
                            <div class="fechas">
                                <?php echo get_the_date(); ?>
                            </div>
                          </div> <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?><div class="exh-image-container" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div> <div class="exhibicion-item-arrow-container"></div> <div class="arrow-2-container">

                              <div class="line-04"></div>
                              <div class="line-03"></div>

                                <div class="triangulo-wrap">
                                    <div class="line-02">

                                    </div>
                                    <div class="line-01"></div>
                                </div>


                          </div> </a>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_mc' ); ?></p>

            <?php endif; ?>
            <a href="<?php echo esc_url( get_category_link( PG_Helper::getTermFromSlug( 'exposicion', 'category' ) ) ); ?>" class="basic-button bottom w-button"><?php _e( 'Ver todas las exposiciones', 'my_mc' ); ?></a>
        </div>
        <?php
            $pgpb_colecciones_query_args = array(
                'post_type' => 'colecciones',
                'posts_per_page' => 3,
                'paged' => get_query_var( 'paged' ) ?: 1,
                'order' => 'ASC',
                'orderby' => 'date'
            )
        ?>
        <?php $pgpb_colecciones_query = new WP_Query( $pgpb_colecciones_query_args ); ?>
        <?php if ( $pgpb_colecciones_query->have_posts() ) : ?>
            <div class="coleccion-wrapper">
                <div class="subtitle">
                    <?php _e( 'colecciones:', 'my_mc' ); ?>
                </div>
                <?php while ( $pgpb_colecciones_query->have_posts() ) : $pgpb_colecciones_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" <?php post_class( 'coleccion-item w-inline-block' ); ?> id="post-<?php the_ID(); ?>"> <h4 class="heading-coleccion"><?php the_title(); ?></h4> <?php the_content(); ?> <div class="text-block-2">
                            <?php _e( 'Permanente', 'my_mc' ); ?>
                        </div> <div class="coeccion-item-arrow-container">
                            <div class="arrow-1-container">
                                <div class="arrow-1-container">
                                    <div class="line-03"></div>
                                    <div class="div-block">
                                        <div class="line-02"></div>
                                        <div class="line-01"></div>
                                    </div>
                                </div>
                            </div>
                        </div> </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'colecciones' ) ) ); ?>" class="basic-button w-button"><?php _e( 'Ver todas las colecciones', 'my_mc' ); ?></a>
                <div class="separador-con-titulo">
                    <div class="subtitle">
                        <?php _e( 'recinto:', 'my_mc' ); ?>
                    </div>
                </div>
                <div class="coleccion-item">
                    <h4 class="heading-coleccion"><?php _e( 'Historia', 'my_mc' ); ?></h4>
                    <p class="coleccion-parrafo" style="overflow: hidden; display: -webkit-box; text-overflow: ellipsis; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">

                      <?php

                          the_field('historia_parrafo_0_parrafo', 396);

                      ?>
                    </p>
                    <div class="text-block-2">
                        <?php _e( 'Permanente', 'my_mc' ); ?>
                    </div>
                    <div class="coeccion-item-arrow-container">
                        <div class="arrow-1-container">
                            <a class="arrow-1-container" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'recinto', 'page' ) ) ); ?>">
                                <div class="line-03"></div>
                                <div class="div-block">
                                    <div class="line-02"></div>
                                    <div class="line-01"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="coleccion-item" id="patrimonio">
                    <h4 class="heading-coleccion"><?php _e( 'Patrimonio De La Humanidad', 'my_mc' ); ?></h4>
                    <p class="coleccion-parrafo">
                      <?php

                          the_field('patrimonio_de_la_humanidad', 396);

                      ?>
                    </p>
                    <div class="text-block-2">
                        <?php _e( 'Permanente', 'my_mc' ); ?>
                    </div>
                    <div class="coeccion-item-arrow-container">
                        <div class="arrow-1-container">
                            <a class="arrow-1-container" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'recinto', 'page' ) ) ); ?>">
                                <div class="line-03"></div>
                                <div class="div-block">
                                    <div class="line-02"></div>
                                    <div class="line-01"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_mc' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<div data-w-id="5f14965c-0621-0e79-ce63-22d9af41f2cc" class="hp-third-section">
    <a data-w-id="c035ee6d-8a12-6c73-6181-5794390faf2c" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Cine Cabanas' ) ) ); ?>" class="marquee-container-cine w-inline-block"> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine cabañas', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine cabañas', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine cabañas', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine cabañas', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> </a>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cine-cabanas-image.png" loading="lazy" data-w-id="6436fdd8-90f1-bf6e-6cda-600de50d4e5b" alt="" class="circle-cine">
</div>
<div data-w-id="1cc6e57b-f7cf-754b-6d51-d838d0e399b2" class="hp-fourth-section">
    <div class="mycontainer orozco">
        <div class="orozco-hp-wrapper">
            <div class="huge-orozco-text">
                <?php _e( 'Orozco', 'my_mc' ); ?>
            </div>
            <div class="orozco-image-wrapper">
              <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'recinto_home_recinto ', esc_url( get_template_directory_uri() . '/images/xTIwFT-80.jpg' ) ), 'full' ) ?>" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 600px, (max-width: 991px) 800px, 1333.328125px" srcset="" alt="" class="orozco-image">
            </div>
            <div class="orozco-info-container first">
                <div class="columna-info-orozco">
                    <div class="subtitulo-imagen-orozco">
                        <?php _e( 'El Hombre En Llamas', 'my_mc' ); ?>
                    </div>
                    <div class="subtitulo-imagen-orozco">/</div>
                    <div class="subtitulo-imagen-orozco">
                        <?php _e( 'Colección Permanente', 'my_mc' ); ?>
                    </div>
                </div>
            </div>
            <div class="orozco-info-container">
                <div class="parrafo-orozco"><?php
                  $recinto= get_page_by_path('recinto');
                  $content = apply_filters( 'the_content', $recinto->post_content );
                  echo $content;
                  ?>
                </div>
                <a data-w-id="add4b97c-06ce-5bc5-5460-b5ef16ba2408" href="<?php echo esc_url( get_permalink( get_page_by_title( 'recinto' ) ) ); ?>" class="leer-mas-wrapper w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Recurso-16.svg" loading="lazy" alt="" class="image-4"> <div class="arrow-2-container">
                        <div class="arrow-2-container">
                            <div class="line-04"></div>
                            <div class="line-03"></div>
                            <div class="triangulo-wrap">
                                <div class="line-02"> </div>
                                <div class="line-01"></div>
                            </div>
                        </div>
                    </div> </a>
                <a href="#" class="basic-button orozco w-button"><?php _e( 'Leer más', 'my_mc' ); ?></a>
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
                                <input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Correo electronico" id="email-2" required="" value="<?php echo ( isset( $_POST['email-2'] ) ? $_POST['email-2'] : '' ); ?>">
                                <input type="submit" value="Suscribirte" data-wait="Please wait..." class="submit-button w-button" name="pgpb_contact_form_mailer_id_2">
                            </div>
                            <input type="hidden" name="pgpb_contact_form_mailer_id" value="1"/>
                        </form>
                    <?php endif; ?>
                    <?php if( $mailer->processed ) : ?>
                        <?php echo $mailer->message; ?>
                    <?php endif; ?>
                    <div class="success-message w-form-done">
                        <div class="text-block-3">
                            <?php _e( '¡Gracias por suscribirte!', 'my_mc' ); ?>
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
                    <a href="<?php echo get_theme_mod( 'redes_sociales_redes_sociales_youtube', '#' ); ?>" class="footer-link"><?php _e( 'Youtube', 'my_mc' ); ?></a>
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
