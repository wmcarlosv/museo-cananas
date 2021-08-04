<?php
/*
 Template Name: visita page
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
    <a data-w-id="22e93460-a2ef-c131-1368-f3365d755790" target="_blank" href="<?php echo get_option('url_ticket'); ?>" class="bot-n-tickets w-inline-block"> <div class="boton-tickets-text">
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
        <div class="taquilla-container">
            <div class="col-wrapper">
                <h2 class="heading-cine"><?php _e( 'Entradas:', 'my_mc' ); ?></h2>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_text_0_entradas_text', true ); ?>
                    </div>
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_price_0_entradas_price', true ); ?>
                    </div>
                </div>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_text_1_entradas_text', true ); ?>
                    </div>
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_price_1_entradas_price', true ); ?>
                    </div>
                </div>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_text_2_entradas_text', true ); ?>
                    </div>
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_price_2_entradas_price', true ); ?>
                    </div>
                </div>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_text_3_entradas_text', true ); ?>
                    </div>
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_price_3_entradas_price', true ); ?>
                    </div>
                </div>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_text_4_entradas_text', true ); ?>
                    </div>
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_price_4_entradas_price', true ); ?>
                    </div>
                </div>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'entradas_text_5_entradas_text', true ); ?>
                    </div>
                </div>
                <h2 class="heading-cine"><?php echo get_post_meta( get_the_ID(), 'entrada_libre', true ); ?></h2>
            </div>
            <div class="col-wrapper">
                <h2 class="heading-cine"><?php _e( 'Horario:', 'my_mc' ); ?></h2>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'horario', true ); ?>
                    </div>
                </div>
                <!--<h2 class="heading-cine"><?php _e( 'Horario Especial (Covid 19):', 'my_mc' ); ?></h2>
                <div class="div-block-3">
                    <div class="taquilla-texto">
                        <?php echo get_post_meta( get_the_ID(), 'horario_especial_covid_19', true ); ?>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<div class="escuelas-section">
    <div class="mycontainer cine-container">
        <div class="main-title-wrapper cine">
            <h1 class="main-title"><?php _e( 'Planea tu visita', 'my_mc' ); ?></h1>
        </div>
        <div class="taquilla-container">
            <div class="col-wrapper">
                <h2 class="heading-cine" style="width: 500px;"><?php _e( 'Estacionamientos públicos por la zona del Museo Cabañas:', 'my_mc' ); ?></h2>
                <p style="white-space: pre;"><?php echo get_post_meta( get_the_ID(), 'estacionamientos_publicos_por_la_zona_del_museo_cabanas', true ); ?></p>
            </div>
            <div class="col-wrapper">
                <h2 class="heading-cine"><?php _e( 'Rutas para llegar al Museo Cabañas:', 'my_mc' ); ?></h2>
                <p style="white-space: pre;"><?php echo get_post_meta( get_the_ID(), 'rutas_para_llegar_al_museo_cabanas', true ); ?></p>
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
                                <input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="<?php _e( 'Correo electronico', 'my_mc' ); ?>" id="email-2" required="" value="<?php echo ( isset( $_POST['email-2'] ) ? $_POST['email-2'] : '' ); ?>">
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
