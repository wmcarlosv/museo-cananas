<?php get_header(); ?>

        <?php get_template_part( 'main_nav', 'main nav' ); ?>
        <section class="part-ex">
            <div class="container">
                <div class="container">
                    <div class="content-one">
                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-12 col-md-12 order-12 order-md-12">
                                <div class="single-cv">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-12 col-md-12 order-1 order-md-1">
                                <div class="single-cv-img">
                                    <div class="single-img">
                                        <?php echo PG_Image::getPostImage( null, 'full', null, 'both', null ) ?>
                                    </div>
                                    <h5 class="name"><?php wp_title( '&nbsp;' ); ?></h5>
                                    <?php the_excerpt( ); ?>
                                </div>
                            </div>
                        </div>
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php PG_Helper::rememberShownPost(); ?>
                                <div <?php post_class( 'colum-cv' ); ?> id="post-<?php the_ID(); ?>">
                                    <div class="row">
                                        <div class="col text-center mb-3">

                                        </div>
                                    </div>
                                    <div class="row"></div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'my_law' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <hr>
            </div>
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
                <p class="text-center footer-p"><?php _e( '© Buis Bürgi AG · Mühlebachstrasse 8 · Postfach 672  · Zürich CH-8024 · Tel. +41 44 250 75 25 · Fax +41 44 250 75 26 · <a href="mailto:mail@bblegal">mail@bblegal.ch</a>', 'my_law' ); ?></p>
            </footer>
        </section>

<?php get_footer(); ?>
