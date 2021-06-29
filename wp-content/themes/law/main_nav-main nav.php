<nav class="navbar navbar-expand-lg navbar-light fixed-top">

    <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>"><?php $custom_logo_id = get_theme_mod( 'custom_logo' );$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?><img src="<?php echo $image[0]; ?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php
                PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                                        <a class="nav-link" {ATTRS}>{TITLE}<span class="sr-only">(current)</span></a>
                                    </li>';
                PG_Smart_Walker_Nav_Menu::$options['current_class'] = 'active';
                wp_nav_menu( array(
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="%2$s navbar-nav" id="%1$s">%3$s</ul>',
                    'walker' => new PG_Smart_Walker_Nav_Menu()
            ) ); ?>
        <?php endif; ?>
        <div class="btn-top">
          <div id="weglot_here"></div>
        </div>
    </div>
</nav>
