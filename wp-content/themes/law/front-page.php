<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?>
<section class="part-one">
    <div class="text-header">
        <div class="container cc">
            <h1 class="animate__animated animate__fadeInDown animate__delay-1s 1s"><?php echo get_theme_mod( 'home-header', __( 'with us you can trust attorney at law', 'my_law' ) ); ?></h1>
            <p class="text-left animate__animated animate__fadeIn animate__delay-2s 2s"><?php echo get_theme_mod( 'home-paragraphe', __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod', 'my_law' ) ); ?></p>
            <div class="widget-left ml-20 animate__animated animate__fadeInUp animate__delay-2s 2s">
              <?php if ( is_active_sidebar( 'languages_switcher' ) ) : ?>
                  <?php dynamic_sidebar( 'languages_switcher' ); ?>
              <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="img-left"></div>
    <div class="img-down">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Rectangle3.png" alt="">
    </div>
    <div class="intro3">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home.jpg" alt="">
    </div>
</section>
<section>
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
</section>


<?php get_footer(); ?>
