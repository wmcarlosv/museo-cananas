<?php
/*
 Template Name: home page
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
<div class="hp-header-section">
    <div class="nav-spacer"></div>
    <div class="mycontainer header">
        <a data-w-id="2742f620-b5da-5a0c-b66e-5d44389ea04b" href="" class="bot-n-tickets w-inline-block"> <div class="boton-tickets-text">
                <?php _e( 'Compra', 'my_mc' ); ?>
                <br>
                <?php _e( 'tus', 'my_mc' ); ?>
                <br>
                <?php _e( 'entradas', 'my_mc' ); ?>
                <br>
                <?php _e( 'aqu??', 'my_mc' ); ?>
            </div> </a>
        <div data-delay="4000" data-animation="cross" data-autoplay="1" data-easing="ease-in-out-quad" data-duration="500" data-infinite="1" class="slider w-slider">
            <div class="w-slider-mask">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php PG_Helper::rememberShownPost(); ?>
                        <div data-w-id="5c9df79f-71cd-1123-9ecf-71dfdd5c1eb5" <?php post_class( 'w-slide' ); ?> id="post-<?php the_ID(); ?>">
                            <div class="slider-wrapper">
                                <div class="slider-text-wrapper">
                                    <div class="text-block-2">
                                        <?php _e( 'Exhibiciones Actuales', 'my_mc' ); ?>
                                    </div>
                                    <h1 class="heading"><?php the_title(); ?></h1>
                                    <?php echo get_the_date( 'd.m.y' ); ?>
                                </div>
                                <div class="slider-image-wrapper">
                                    <?php echo PG_Image::getPostImage( null, 'full', array(
                                            'class' => 'slider-image',
                                            'loading' => 'lazy',
                                            'style' => '-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)',
                                            'sizes' => '(max-width: 991px) 100vw, 70vw'
                                    ), 'both', null ) ?>
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
                    <a href="#" <?php post_class( 'exhibicion-item w-inline-block' ); ?> id="post-<?php the_ID(); ?>"> <div class="exhibicion-text-wrapper">
                            <div class="text-block-2">
                                <?php _e( 'This is some text inside of a div block.', 'my_mc' ); ?>
                            </div>
                            <h3 class="heading exhibicion"><?php the_title(); ?></h3>
                            <div class="fechas">
                                <?php the_content(); ?>
                            </div>
                        </div> <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?><div class="exh-image-container" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div> <div class="exhibicion-item-arrow-container"></div> <div class="arrow-2-container">
                            <div class="line-04"></div>
                            <div class="line-03"></div>
                            <div class="triangulo-wrap">
                                <div class="line-02">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"></a>
                                </div>
                                <div class="line-01"></div>
                            </div>
                        </div> </a>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_mc' ); ?></p>
            <?php endif; ?>
            <a href="<?php echo esc_url( get_category_link( PG_Helper::getTermFromSlug( 'exibition', 'category' ) ) ); ?>" class="basic-button bottom w-button"><?php _e( 'Ver todas las exhibiciones', 'my_mc' ); ?></a>
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
                    <a href="https://museo-cabanas-2020.webflow.io/colecciones/jose-clemente-orozco-copy-4" <?php post_class( 'coleccion-item w-inline-block' ); ?> id="post-<?php the_ID(); ?>"> <h4 class="heading-coleccion"><?php the_title(); ?></h4> <?php the_content(); ?> <div class="text-block-2">
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
                <a href="colecciones.html" class="basic-button w-button"><?php _e( 'Ver todas las colecciones', 'my_mc' ); ?></a>
                <div class="separador-con-titulo">
                    <div class="subtitle">
                        <?php _e( 'recinto:', 'my_mc' ); ?>
                    </div>
                </div>
                <div class="coleccion-item">
                    <h4 class="heading-coleccion"><?php _e( 'Historia', 'my_mc' ); ?></h4>
                    <p class="coleccion-parrafo"><?php _e( 'En 1939, Orozco termin?? ah?? El hombre en llamas, considerada su obra maestra y una de las piezas cumbres de la pintura mundial del siglo xx.', 'my_mc' ); ?></p>
                    <div class="text-block-2">
                        <?php _e( 'Permanente', 'my_mc' ); ?>
                    </div>
                    <div class="coeccion-item-arrow-container">
                        <div class="arrow-1-container">
                            <div class="arrow-1-container">
                                <div class="line-03"></div>
                                <div class="div-block">
                                    <div class="line-02"></div>
                                    <div class="line-01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coleccion-item">
                    <h4 class="heading-coleccion"><?php _e( 'Patrimonio De La Humanidad', 'my_mc' ); ?></h4>
                    <p class="coleccion-parrafo"><?php _e( 'Por su belleza arquitect??nica, e importancia hist??rica y cultural, recibe el nombramiento de Patrimonio Cultural de la Humanidad que otorga la UNESCO', 'my_mc' ); ?></p>
                    <div class="text-block-2">
                        <?php _e( 'Permanente', 'my_mc' ); ?>
                    </div>
                    <div class="coeccion-item-arrow-container">
                        <div class="arrow-1-container">
                            <div class="arrow-1-container" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'area', 'page' ) ) ); ?>">
                                <div class="line-03"></div>
                                <div class="div-block">
                                    <div class="line-02"></div>
                                    <div class="line-01"></div>
                                </div>
                            </div>
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
    <a data-w-id="c035ee6d-8a12-6c73-6181-5794390faf2c" href="cine.html" class="marquee-container-cine w-inline-block"> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine caba??as', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine caba??as', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine caba??as', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <h2 class="heading-2"><?php _e( 'ver cartelera', 'my_mc' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/flecha-der.svg" loading="lazy" alt="" class="image-3">
            <div class="film-texture-container"></div>
        </div> <div class="text-wrapper-marquee">
            <h2 class="heading-2"><?php _e( 'cine caba??as', 'my_mc' ); ?></h2>
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
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'recinto_home_recinto ', esc_url( get_template_directory_uri() . '/images/xTIwFT-80.jpg' ) ), 'full' ) ?>" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 600px, (max-width: 991px) 800px, 1333.328125px" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/xTIwFT-80-p-500.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/xTIwFT-80-p-800.jpeg 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/xTIwFT-80.jpg 1372w" alt="" class="orozco-image">
            </div>
            <div class="orozco-info-container first">
                <div class="columna-info-orozco">
                    <div class="subtitulo-imagen-orozco">
                        <?php _e( 'El Hombre En Llamas', 'my_mc' ); ?>
                    </div>
                    <div class="subtitulo-imagen-orozco">/</div>
                    <div class="subtitulo-imagen-orozco">
                        <?php _e( 'Colecci??n Permanente', 'my_mc' ); ?>
                    </div>
                </div>
            </div>
            <div class="orozco-info-container">
                <p class="parrafo-orozco"><?php _e( 'Jos?? Clemente Orozco, uno de los m??s importantes y representativos artistas pl??sticos mexicanos del siglo XX, naci?? el 23 de noviembre de 1883 en Zapotl??n El Grande, Jalisco.', 'my_mc' ); ?><br><?php _e( 'Es autor de obra mural??stica, dibuj??stica y de caballete que forma parte de relevantes colecciones de M??xico y del extranjero y de series que han sido piedra de toque en la iconograf??a nacional, como M??xico en la Revoluci??n y La casa del llanto, entre otros.', 'my_mc' ); ?><br> <?php _e( 'Estudi?? pintura en la Academia de San Carlos durante ocho a??os. En 1916 present?? su primera exhibici??n individual en la Galer??a Biblos en la Ciudad de M??xico.', 'my_mc' ); ?><br><?php _e( 'En 1923, por invitaci??n de Jos?? Vasconcelos, pint?? al fresco los muros de la Escuela Nacional Preparatoria que concluy?? en 1926.', 'my_mc' ); ?></p>
                <a data-w-id="add4b97c-06ce-5bc5-5460-b5ef16ba2408" href="#" class="leer-mas-wrapper w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Recurso-16.svg" loading="lazy" alt="" class="image-4"> <div class="arrow-2-container">
                        <div class="arrow-2-container">
                            <div class="line-04"></div>
                            <div class="line-03"></div>
                            <div class="triangulo-wrap">
                                <div class="line-02"></div>
                                <div class="line-01"></div>
                            </div>
                        </div>
                    </div> </a>
                <a href="#" class="basic-button orozco w-button"><?php _e( 'Leer m??s', 'my_mc' ); ?></a>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="mycontainer footer">
        <div class="footer-wrapper">
            <div id="w-node-aac255a4-46db-2952-e2ac-403bb428fac7-2aaf4bf3" class="newsletter-wrapper">
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
                                <?php _e( '??Quieres recibir informaci??n del Museo Caba??as? ??Suscr??bete!', 'my_mc' ); ?>
                            </label>
                            <div class="text-field-container">
                                <input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="<?php _e( 'Correo Electr??nico', 'my_mc' ); ?>" id="email-2" required="" value="<?php echo ( isset( $_POST['email-2'] ) ? $_POST['email-2'] : '' ); ?>">
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
                            <?php _e( '??Gracias por Suscribirte!', 'my_mc' ); ?>
                        </div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div class="text-block-4">
                            <?php _e( '??Oops! Parece que algo salio mal.', 'my_mc' ); ?>
                        </div>
                    </div>
                    <?php
                        if(get_bloginfo("language") == 'en-US'){
                             $privacidad= get_page_by_path('privacy');
                        }else{
                             $privacidad= get_page_by_path('privacidad');
                        }
                    ?>

                    <a href="<?php echo esc_url( get_permalink( $privacidad ) ); ?>" class="footer-link"><?php _e( 'Aviso de Privacidad', 'my_mc' ); ?></a>
                </div>
            </div>
            <ol id="w-node-_3023e319-5a48-5c7f-3c35-fdd9f99b1999-2aaf4bf3" role="list" class="footer-links-list w-list-unstyled">
                <li class="list-item">
                    <h6 class="footer-list-title"><?php _e( 'Redes Sociales:', 'my_mc' ); ?></h6>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( 'Facebook', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( 'Instagram', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( 'Twitter', 'my_mc' ); ?></a>
                </li>
            </ol>
            <ol id="w-node-_18a0058b-0dbf-968e-a6d1-0b2e1f68905e-2aaf4bf3" role="list" class="footer-links-list w-list-unstyled">
                <li class="list-item">
                    <h6 class="footer-list-title"><?php _e( 'Quienes Somos:', 'my_mc' ); ?></h6>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( 'Misi??n', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( 'Directorio', 'my_mc' ); ?></a>
                </li>
            </ol>
            <ol id="w-node-_67c1b115-bdb0-9a09-cd1a-ba5c577882fb-2aaf4bf3" role="list" class="footer-links-list w-list-unstyled">
                <li class="list-item">
                    <h6 class="footer-list-title"><?php _e( 'Contacto:', 'my_mc' ); ?></h6>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( 'Caba??as #8, Plaza Tapat??a Zona Centro', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( '3668 16 42 Ext. 31014', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="#" class="footer-link"><?php _e( '3668 16 45', 'my_mc' ); ?></a>
                </li>
            </ol>
        </div>
    </div>
</div>

<?php get_footer(); ?>
