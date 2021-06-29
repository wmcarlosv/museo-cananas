<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?>
<section class=" white">
    <div class="container">
        <div class="content-one area">
            <div class="bord bord-figures"></div>
            <h2 class="firm text-uppercase"><?php _e( 'some figures', 'my_law' ); ?></h2>
            <div class="bord2"></div>
            <div class="row">
                <div class="col-12">
                    <div class="figures-container">
                        <h5 class="text-uppercase"><?php echo get_theme_mod( 'HEADER KEY IMPRESSIONS', __( 'KEY IMPRESSIONS', 'my_law' ) ); ?></h5>

                        <p class="text-center txt-btm"><?php echo get_theme_mod( 'KEY IMPRESSIONS', __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ) ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="work-experience">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="figure-culom">
                        <h5 class=" text-uppercase text-center mb-3"><?php echo get_theme_mod( 'HEADER YEARS OF EXPERIENCE', __( 'YEARS OF EXPERIENCE', 'my_law' ) ); ?></h5>
                        <p class="text-center"><?php echo get_theme_mod( 'YEARS OF EXPERIENCE', __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ) ); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-offset-4">
                    <div class="figure-culom">
                        <h5 class=" text-uppercase text-center mb-3"><?php echo get_theme_mod( 'HEADER SUCCESSFUL CASES', __( 'SUCCESSFUL CASES', 'my_law' ) ); ?></h5>
                        <p class="text-center"><?php echo get_theme_mod( 'SUCCESSFUL CASES', __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ) ); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-offset-4">
                    <div class="figure-culom">
                        <h5 class=" text-uppercase text-center mb-3"><?php echo get_theme_mod( 'header text four', __( 'HOURS WORKED', 'my_law' ) ); ?></h5>
                        <p class="text-center"><?php echo get_theme_mod( 'text four', __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ) ); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="figure-culom">
                        <h5 class=" text-uppercase text-center mb-3"><?php echo get_theme_mod( 'HEADER NUMBER OF CASES', __( 'NUMBER OF CASES', 'my_law' ) ); ?></h5>
                        <p class="text-center"><?php echo get_theme_mod( 'NUMBER OF CASES', __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,', 'my_law' ) ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="chart-img text-center">
                    <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'FIGURES-IMAGE', esc_url( get_template_directory_uri() . '/img/chart.png' ) ), 'full' ) ?>" alt="">
                </div>
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

<?php get_footer(); ?>
