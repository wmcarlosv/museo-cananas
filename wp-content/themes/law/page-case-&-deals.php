<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?>
<section class=" white">
    <div class="container">
        <div class="content-one area">

            <h2 class="firm text-uppercase"><?php _e( 'Areas  Of Practice', 'my_law' ); ?></h2>
            <div class="bord2"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bordly-area">
                        <p><?php _e( 'Buis Bürgi AG advises and provides dispute resolution services in the following areas of practice&colon;', 'my_law' ); ?></p>
                        <ul>
                            <li>
                                <?php _e( 'Contracts', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Corporate / M&A', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Banking and Finance', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Torts and Insurance', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Intellectual Property and Competition', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Employment', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Trusts and Estates', 'my_law' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Insolvency', 'my_law' ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-grey-area"></div>
                    <img class="img1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/image-1.jpg" alt="">
                    <div class="box-grey-area2"></div>
                </div>
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
