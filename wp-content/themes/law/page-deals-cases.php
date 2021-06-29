<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?>
<section class="white portfolio" id="portfolio">
    <div class="container">
        <div class="content-one team">
            <div class="bord bord-team"></div>
            <h2 class="firm text-uppercase"><?php _e( 'Deals & Cases', 'my_law' ); ?></h2>
            <div class="bord2"></div>
        </div>
        <div id="box" class="box-content-case">
            <div class="row">
              <!-- portfolio 1 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 0 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box animate__animated animate__fadeInUp animate__delay-.5s .5s<?php if( $cases_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 2 -->

                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 1 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box animate__animated animate__fadeInUp animate__delay-1s 1s<?php if( $cases_item_number == 1) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 3 -->

                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 2 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box animate__animated animate__fadeInUp animate__delay-2s 2s<?php if( $cases_item_number == 2) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 3 -->

                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 3 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 3) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 4 -->

                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 4 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 4) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 5 -->

                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 5 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 5) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 6 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 6 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 6) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 7 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 7 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 7) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 8 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 8 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 8) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 9 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 9 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 9) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

                <!-- portfolio 10 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC'
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 10 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 10) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>
                <!-- portfolio 11 -->
                <?php
                    $cases_args = array(
                        'post_type' => 'cases',
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'order'   => 'DESC'
                    )
                ?>
                <?php $cases = new WP_Query( $cases_args ); ?>
                <?php if ( $cases->have_posts() ) : ?>
                    <?php $cases_item_number = 0; ?>
                    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
                        <?php if( $cases_item_number == 11 ) : ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-4 col-sm-12 box<?php if( $cases_item_number == 11) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">

                                <div class="box-case portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo '#portfolio-item'.$cases_item_number ?>">
                                    <div class="overlay"> <span class="expand"></span> </div>
                                    <h5 class="text-center"><?php the_title(); ?></h5>
                                    <div class="box-p mb-5"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $cases_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-md-12 text-center">
            <div class="inner-btn">
                <button id="showMore">
                    <?php _e( 'see more', 'my_law' ); ?>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <p class="text-center text-footer"><?php _e( '‘Banking and litigation boutique «Buis Bürgi AG» routinely handles cross-border mandates, including disputes concerning contracts, money transfer, bank guarantees, employment law, as well as cross-border enforcement.’ («Legal 500 EMEA»)', 'my_law' ); ?></p>
            <div class="box-footer">
              <a class="img-one" href="https://www.legal500.com/firms/10150-buis-burgi-ag/10162-zurich-switzerland/" target="_blank">  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.svg" alt=""></a>
              <a class="img-two" href="https://www.iflr1000.com/Firm/Buis-Burgi-Switzerland/Profile/1903#profile" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.svg" alt=""></a>
              <a class="img-three" href="https://whoswholegal.com/firms/buis-burgi-ag" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/5.svg" alt=""></a>
              <a class="img-four" href="https://www.bestlawyers.com/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3.svg" alt=""></a>
              <a class="img-five" href="https://www.leadersleague.com/en/rankings?company=Buis%20B%C3%BCrgi" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leaders.png" alt=""></a>
            </div>
        </div>
    </div>
    <footer class="footer-box">
        <span class="outline-footer"></span>
        <p class="text-center footer-p"><?php _e( '© Buis Bürgi AG · Mühlebachstrasse 8 · Postfach · CH-8024 Zürich · &nbspTel. &#43;41 44 250 75 25 · &nbspFax &#43;41 44 250 75 26 · <a href="mailto:mail@bblegal">mail@bblegal.ch</a>', 'my_law' ); ?></p>
    </footer>
</section>
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 0; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>
<!-- Portfolio Modal 2-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 1; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 1) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 3-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 2; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 2) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 3-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 3; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 3) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 4-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 4; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 4) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 5-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 5; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 5) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 6-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 6; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 6) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 7-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 7; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 7) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 8-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 8; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 8) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>

<!-- Portfolio Modal 9-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 9; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 9) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>
<!-- Portfolio Modal 10-->
<?php
    $cases_args = array(
        'post_type' => 'cases',
        'nopaging' => true,
        'order' => 'ASC',
        'orderby' => 'date',
        'order'   => 'DESC'

    )
?>
<?php $cases = new WP_Query( $cases_args ); ?>
<?php if ( $cases->have_posts() ) : ?>
    <?php $cases_item_number = 10; ?>
    <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div class="portfolio-modal modal fade<?php if( $cases_item_number == 10) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'portfolio-item'.$cases_item_number ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h1 class="text-center mb-5" id="portfolioModal1Label"><?php the_title(); ?></h1>
                                    <!-- Icon Divider-->

                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <div class="text-center"><?php the_content(); ?></div>
                                    <button class="btn-primary close-btn" data-dismiss="modal">
                                        <?php _e( 'Close Window', 'my_law' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $cases_item_number++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
