<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?> 
<section class=" white"> 
    <div class="container"> 
        <div class="content-one area"> 
            <div class="bord bord-area"></div>                     
            <h2 class=" text-uppercase"><?php _e( 'Areas  Of Practice', 'my_law' ); ?></h2> 
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
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4.png" alt=""> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3.png" alt=""> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/5.png" alt=""> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.png" alt=""> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.png" alt=""> 
            </div>                     
        </div>                 
    </div>             
    <footer class="footer-box"> 
        <span class="outline-footer"></span> 
        <p class="text-center footer-p"><?php _e( '© Buis Bürgi AG · Mühlebachstrasse 8 · Postfach 672  · Zürich CH-8024 · Tel. +41 44 250 75 25 · Fax +41 44 250 75 26 · mail@bblegal.ch', 'my_law' ); ?></p> 
    </footer>             
</section>        

<?php get_footer(); ?>