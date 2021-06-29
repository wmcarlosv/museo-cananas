<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?>
<section class="part-ex">
    <div class="container">
        <div class="content-one content-intro">
            <h2 class="firm text-uppercase"><?php _e( 'the firm', 'my_law' ); ?></h2>
            <div class="bord2"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bordly">
                        <p class="text-left"><?php echo get_theme_mod( 'Firm-text', 'Buis Bürgi AG is an independent Zurich based law firm focusing on commercial law and with a strong international practice. Our lawyers advise corporate and private clients mainly in commercial and financial law and provide dispute resolution services in these fields in particular.<br><br> We are a dynamic team deeply committed to implementing the needs of our clients.<br><br> The law firm «Buis Bürgi AG» was established by partners ofhe lawfirm «De Capitani Kronauer Buis» in 2008.' ); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-grey"></div>
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img class="img2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/image2.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-interval="3000">
                                <img class="img2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/image4.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-interval="3000">
                                <img class="img2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/image6.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-interval="3000">
                                <img class="img2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/image7.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-interval="3000">
                                <img class="img2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/image8.jpg" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'my_law' ); ?></span> </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'my_law' ); ?></span> </a>
                    </div>
                </div>
            </div>
        </div>
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
        <p class="text-center footer-p"><?php _e( '© Buis Bürgi AG · Mühlebachstrasse 8 · Postfach · CH-8024 Zürich · &nbspTel. &#43;41 44 250 75 25 · &nbspFax &#43;41 44 250 75 26 · <a href="mailto:mail@bblegal">mail@bblegal.ch</a>', 'my_law' ); ?></p>
    </footer>
</section>
<?php get_footer(); ?>
