<?php get_header(); ?>

<?php get_template_part( 'main_nav', 'main nav' ); ?>
<section class="white">
    <div class="container">

        <div class="content-one area">
            <div class="bord bord-contact"></div>
            <h2 class="firm text-uppercase"> <?php _e( 'contact', 'my_law' ); ?></h2>
            <div class="bord2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="inner" id="pgpb_contact_form_mailer_id">
                                <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                                <?php $mailer->process( array(
                                        'form_id' => 'pgpb_contact_form_mailer_id',
                                        'send_to_email' => true

                                ) ); ?>
                                <?php if( !$mailer->processed || $mailer->error) : ?>
                                    <form action="<?php echo '#pgpb_contact_form_mailer_id'; ?>" class="contact form" method="post" onsubmit="event.stopImmediatePropagation();event.stopPropagation();">
                                        <label class="form-group">
                                            <input type="text" class="form-control" required name="pgpb_contact_form_mailer_id_Name" value="<?php echo ( isset( $_POST['pgpb_contact_form_mailer_id_Name'] ) ? $_POST['pgpb_contact_form_mailer_id_Name'] : '' ); ?>">
                                            <span><?php _e( 'Name &nbsp;', 'my_law' ); ?><small> <em><?php _e( '(required)', 'my_law' ); ?></em> </small> </span>
                                            <span class="border"></span>
                                        </label>
                                        <label class="form-group">
                                            <input type="text" class="form-control" required name="pgpb_contact_form_mailer_id_Email" value="<?php echo ( isset( $_POST['pgpb_contact_form_mailer_id_Email'] ) ? $_POST['pgpb_contact_form_mailer_id_Email'] : '' ); ?>">
                                            <span><?php _e( 'Email &nbsp;', 'my_law' ); ?><small> <em><?php _e( '(required)', 'my_law' ); ?></em> </small> </span>
                                            <span class="border"></span>
                                        </label>
                                        <label class="form-group">
                                            <input type="text" class="form-control" required name="pgpb_contact_form_mailer_id_Phone" value="<?php echo ( isset( $_POST['pgpb_contact_form_mailer_id_Phone'] ) ? $_POST['pgpb_contact_form_mailer_id_Phone'] : '' ); ?>">
                                            <span><?php _e( 'Phone &nbsp;', 'my_law' ); ?><small> <em><?php _e( '(required)', 'my_law' ); ?></em> </small> </span>
                                            <span class="border"></span>
                                        </label>
                                        <label class="form-group">
                                            <textarea class="form-control" required name="pgpb_contact_form_mailer_id_Message"><?php echo ( isset( $_POST['pgpb_contact_form_mailer_id_Message'] ) ? $_POST['pgpb_contact_form_mailer_id_Message'] : '' ); ?></textarea>
                                            <span><?php _e( 'Your Message', 'my_law' ); ?></span>
                                            <span class="border"></span>
                                        </label>
                                        <button>
                                            <?php _e( 'send message', 'my_law' ); ?>
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </button>
                                        <input type="hidden" name="pgpb_contact_form_mailer_id" value="1"/>
                                    </form>
                                <?php endif; ?>
                                <?php if( $mailer->processed ) : ?>
                                    <?php if( $mailer->error ) : ?>
                                        <form class="error_message" action="<?php echo esc_url( get_template_directory_uri() ); ?>/index.html" method="post" pgwp-needed style="display:block;">
                                            <p><?php _e( 'Oops!there was an error. Please try again.', 'my_law' ); ?></p>
                                        </form>
                                    <?php else : ?>
                                        <form class="ful_message" action="<?php echo esc_url( get_template_directory_uri() ); ?>/index.html" method="post" pgwp-needed style="display:block;">
                                            <p><?php _e( 'Thank you for your message! It has been sent.', 'my_law' ); ?></p>
                                        </form>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-borderr">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 p-0">
                          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/plan.jpg" target="_blank">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/plan.jpg" alt="location" style="width:100%">

                          </a>

                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="txt">
                                <h5 class="text-uppercase"><?php _e( 'location', 'my_law' ); ?></h5>
                                <p class="text-left"><?php _e( 'Our offices are located directly at the Zurich Stadelhofen train station. From the Zurich main station and from Zurich airport, we can be conveniently reahed by train (Online Timetable at', 'my_law' ); ?> <a href="https://www.sbb.ch"><?php _e( 'www.sbb.ch', 'my_law' ); ?></a> <?php _e( '). Upon request, our parking lots at Mühlebachstrasse 7 may be used.', 'my_law' ); ?></p>
                            </div>
                        </div>
                    </div>
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
        <p class="text-center footer-p"><?php _e( '© Buis Bürgi AG · Mühlebachstrasse 8 · Postfach · CH-8024 Zürich · &nbspTel. &#43;41 44 250 75 25 · &nbspFax &#43;41 44 250 75 26 · <a href="mailto:mail@bblegal">mail@bblegal.ch</a>', 'my_law' ); ?></p>
    </footer>
</section>

<?php get_footer(); ?>
