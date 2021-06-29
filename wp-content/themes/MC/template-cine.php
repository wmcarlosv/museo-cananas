<?php
/*
 Template Name: cine page
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
<div class="cine-section">
    <div class="mycontainer cine-container">
        <div class="main-title-wrapper cine">
            <h1 class="main-title"><?php _e( 'Cine Cabañas', 'my_mc' ); ?></h1>
        </div>
        <div class="cine-content-wrapper">
            <div class="col-wrapper left">
                <?php the_content(); ?>
                <a href="#" class="basic-button small w-button"><?php _e( 'Comprar tickets', 'my_mc' ); ?></a>
            </div>
            <div class="col-wrapper">
                <div class="cartelera-item-container">
                    <div class="cartelera-img">
                        <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'content_one_image_one', true ), 'large' ) ?>" loading="lazy" alt="">

                    </div>
                    <div id="w-node-e815aabd-f2f4-aed2-5286-f8f3e8e5718f-e20f46c7" class="cartelera-info">
                        <?php echo get_post_meta( get_the_ID(), 'content_one_heading', true ); ?>
                    </div>
                    <p id="w-node-e815aabd-f2f4-aed2-5286-f8f3e8e571a6-e20f46c7" class="cartelera-sinopsis"><?php echo get_post_meta( get_the_ID(), 'content_one_text', true ); ?></p>
                    <a id="w-node-e815aabd-f2f4-aed2-5286-f8f3e8e571a8-e20f46c7" href="#" class="basic-button w-button"><?php _e( 'Comprar tickets', 'my_mc' ); ?></a>
                </div>
                <div class="cartelera-item-container">
                    <div class="cartelera-img">

                        <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'content_two_image_two', true ), 'large' ) ?>" loading="lazy" alt="">
                    </div>
                    <div id="w-node-d9036a32-17ed-d99b-f35d-57d9f5e1c47c-e20f46c7" class="cartelera-info">
                        <?php echo get_post_meta( get_the_ID(), 'content_two__heading', true ); ?>
                    </div>
                    <p id="w-node-d9036a32-17ed-d99b-f35d-57d9f5e1c493-e20f46c7" class="cartelera-sinopsis"><?php echo get_post_meta( get_the_ID(), 'content_two_text', true ); ?></p>
                    <a id="w-node-d9036a32-17ed-d99b-f35d-57d9f5e1c495-e20f46c7" href="#" class="basic-button w-button"><?php _e( 'Comprar tickets', 'my_mc' ); ?></a>
                </div>
                <div class="cartelera-item-container">
                    <div class="cartelera-img">

                      <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'content_three_image_three', true ), 'large' ) ?>" loading="lazy" alt="">
                    </div>
                    <div id="w-node-bace9b98-4d16-b267-f423-f0bb86fddacd-e20f46c7" class="cartelera-info">
                        <?php echo get_post_meta( get_the_ID(), 'content_three_heading', true ); ?>
                    </div>
                    <p id="w-node-bace9b98-4d16-b267-f423-f0bb86fddae4-e20f46c7" class="cartelera-sinopsis"><?php echo get_post_meta( get_the_ID(), 'content_three_text', true ); ?></p>
                    <a id="w-node-bace9b98-4d16-b267-f423-f0bb86fddae6-e20f46c7" href="#" class="basic-button w-button"><?php _e( 'Comprar tickets', 'my_mc' ); ?></a>
                </div>
                <div class="cartelera-item-container">
                    <div class="cartelera-img">

                      <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'content_four_image_four', true ), 'large' ) ?>" loading="lazy" alt="">
                    </div>
                    <div id="w-node-_52ec2acd-3cfe-0ee0-66ed-b26b577e56eb-e20f46c7" class="cartelera-info">
                        <?php echo get_post_meta( get_the_ID(), 'content_four_heading', true ); ?>
                    </div>
                    <p id="w-node-_52ec2acd-3cfe-0ee0-66ed-b26b577e5702-e20f46c7" class="cartelera-sinopsis"><?php echo get_post_meta( get_the_ID(), 'content_four_text', true ); ?></p>
                    <a id="w-node-_52ec2acd-3cfe-0ee0-66ed-b26b577e5704-e20f46c7" href="#" class="basic-button w-button"><?php _e( 'Comprar tickets', 'my_mc' ); ?></a>
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
                        <form id="wf-form-Newsletter" name="wf-form-Newsletter" data-name="Newsletter" action="<?php echo '#pgpb_contact_form_mailer_id'; ?>" method="post" onsubmit="event.stopImmediatePropagation();event.stopPropagation();">
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
                    <a href="<?php echo get_theme_mod( 'quienes_somos_quienes_somos_Misión', '#' ); ?>" class="footer-link"><?php _e( 'Misión', 'my_mc' ); ?></a>
                </li>
                <li class="footer-list-item">
                    <a href="<?php echo get_theme_mod( 'quienes_somos_quienes_somos_organigrama', '#' ); ?>" class="footer-link"><?php _e( 'Organigrama', 'my_mc' ); ?></a>
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
