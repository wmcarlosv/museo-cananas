<?php
/*
 Template Name: colecciones page
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
<div class="colecciones-section">
    <div class="mycontainer cine-container">
        <div class="main-title-wrapper cine">
            <h1 class="main-title"><?php _e( 'Colecciones', 'my_mc' ); ?></h1>
        </div>
        <div class="collection-list-wrapper-2">
            <?php
                $pgpb_colecciones_query_args = array(
                    'post_type' => 'colecciones',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $pgpb_colecciones_query = new WP_Query( $pgpb_colecciones_query_args ); ?>
            <?php if ( $pgpb_colecciones_query->have_posts() ) : ?>
                <div class="collection-list-2">
                    <?php while ( $pgpb_colecciones_query->have_posts() ) : $pgpb_colecciones_query->the_post(); ?>
                        <?php PG_Helper::rememberShownPost(); ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" <?php post_class( 'colection-item-container w-inline-block' ); ?> id="post-<?php the_ID(); ?>"> <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?><div class="colection-img-wrapper" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div> <h2 class="heading-coleccion"><?php the_title(); ?></h2> <?php echo get_the_excerpt(get_the_ID()) ?> <div class="text-block-2">
                                <?php _e( 'Acervo', 'my_mc' ); ?>
                            </div> <div class="arrow-1-container colecciones">
                                <div class="line-03"></div>
                                <div class="div-block">
                                    <div class="line-02"></div>
                                    <div class="line-01"></div>
                                </div>
                            </div> </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_mc' ); ?></p>
            <?php endif; ?>
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
                    <a href="<?php echo get_permalink(get_page_by_title("Misi??n")); ?>" class="footer-link"><?php _e( 'Misi??n', 'my_mc' ); ?></a>
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
                    <a href="#" class="footer-link"><?php echo get_theme_mod( 'contact_info_address_info', __( 'Caba??as #8, Plaza Tapat??a Zona Centro', 'my_mc' ) ); ?></a>
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
