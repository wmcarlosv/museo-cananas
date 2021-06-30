<?php
/*
 Template Name: licitaciones page
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
<div class="hp-second-section">
    <div class="mycontainer exp-page">
        <div class="div-block-2">
            <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                <div class="main-title-wrapper w-tab-menu">
                    <a data-w-tab="Tab 4" class="exp-page-submenu-link w-inline-block w-tab-link"> <div>
                            <?php _e( '2018', 'my_mc' ); ?>
                        </div> </a>
                    <a data-w-tab="Tab 1" class="exp-page-submenu-link w-inline-block w-tab-link"> <div>
                            <?php _e( '2019', 'my_mc' ); ?>
                        </div> </a>
                    <a data-w-tab="Tab 2" class="exp-page-submenu-link w-inline-block w-tab-link"> <div>
                            <?php _e( '2020', 'my_mc' ); ?>
                        </div> </a>
                    <a data-w-tab="Tab 3" class="exp-page-submenu-link w-inline-block w-tab-link w--current"> <div>
                            <?php _e( '2021', 'my_mc' ); ?>
                        </div> </a>
                </div>
                <div class="w-tab-content">
                    <div data-w-tab="Tab 4" class="w-tab-pane">
                        <div class="collection-list-wrapper-4">
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2018_0_heading_2018', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2018_0_text_2018', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2018', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2018_0_file') ): ?>
                                      <a href="<?php the_field('file2018_0_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2018_1_heading_2018', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2018_1_text_2018', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2018', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2018_1_file') ): ?>
                                      <a href="<?php the_field('file2018_1_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2018_2_heading_2018', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2018_2_text_2018', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2018', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2018_2_file') ): ?>
                                      <a href="<?php the_field('file2018_2_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2018_3_heading_2018', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2018_3_text_2018', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2018', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2018_3_file') ): ?>
                                      <a href="<?php the_field('file2018_3_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 1" class="w-tab-pane">
                        <div class="collection-list-wrapper-4">
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2019_0_heading_2019', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2019_0_text_2019', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2019', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2019_0_file') ): ?>
                                      <a href="<?php the_field('file2019_0_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2019_1_heading_2019', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2019_1_text_2019', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2019', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2019_1_file') ): ?>
                                      <a href="<?php the_field('file2019_1_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2019_2_heading_2019', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2019_2_text_2019', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2019', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2019_2_file') ): ?>
                                      <a href="<?php the_field('file2019_2_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2019_3_heading_2019', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2019_3_text_2019', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2019', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2019_3_file') ): ?>
                                      <a href="<?php the_field('file2019_3_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane">
                        <div class="collection-list-wrapper-4">
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2020_0_heading_2020', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2020_0_text_2020', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2020', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2020_0_file') ): ?>
                                      <a href="<?php the_field('file2020_0_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2020_1_heading_2020', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2020_1_text_2020', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2020', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2020_1_file') ): ?>
                                      <a href="<?php the_field('file2020_1_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2020_2_heading_2020', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2020_2_text_2020', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2020', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2020_2_file') ): ?>
                                      <a href="<?php the_field('file2020_2_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2020_3_heading_2020', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2020_3_text_2020', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2020', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2020_3_file') ): ?>
                                      <a href="<?php the_field('file2020_3_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">
                        <div class="collection-list-wrapper-4">
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2021_0_heading_2021', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2021_0_text_2021', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2021', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2021_0_file') ): ?>
                                      <a href="<?php the_field('file2021_0_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2021_1_heading_2021', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2021_1_text_2021', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2021', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2021_1_file') ): ?>
                                      <a href="<?php the_field('file2021_1_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2021_2_heading_2021', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2021_2_text_2021', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2021', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2021_2_file') ): ?>
                                      <a href="<?php the_field('file2021_2_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="licitaciones-item-container">
                                <h2 class="heading-coleccion licitaciones"><?php echo get_post_meta( get_the_ID(), 'heading_2021_3_heading_2021', true ); ?></h2>
                                <div class="licitaciones-info-wrapper">
                                    <div class="licitaciones-info-text">
                                        <?php echo get_post_meta( get_the_ID(), 'text_2021_3_text_2021', true ); ?>
                                    </div>
                                    <div class="licitaciones-info-text">
                                        <?php _e( '2021', 'my_mc' ); ?>
                                    </div>
                                    <?php if( get_field('file2021_3_file') ): ?>
                                      <a href="<?php the_field('file2021_3_file'); ?>" class="basic-button licitaciones w-button" download><?php _e( 'descargar bases', 'my_mc' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="exp-page-heading"><?php _e( 'Licitaciones', 'my_mc' ); ?></h1>
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