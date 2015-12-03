<?php
/**
 * Template name: Contact
 */
?>

<?php get_header(); ?>

    <section id="main-content">

        <?php get_template_part('inc/head-main'); ?>

        <div class="wrapper">

                    <div class="row clearfix">

                        <div class="col-md-6 contact-box">
                            <p class="h3">Getting in touch is easy</p>
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                            Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet</p>

                            <?php echo do_shortcode('[contact-form-7 id="1442" title="Contact form 1"]'); ?>

                        </div>
                        <!-- .col-md-6 -->

                        <div class="col-md-6">
                            <div class="kp-map-wrapper">

                                <div id="kp-map" class="kp-map" data-place="Ha Noi" data-latitude="21.029532" data-longitude="105.852345"></div>

                                <div class="popup-map">
                                    <p class="h5">Say Hello!</p>
                                    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam</p>
                                    <p class="h5">Contact Info</p>
                                    <p>Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet</p>
                                    <p>Phone: 333666777</p>
                                    <p><a href="mailto:tutatheme@gmail.com">tutatheme@gmail.com</a></p>
                                </div>

                            </div>
                            <!-- kp-map-wrapper -->
                        </div>
                        <!-- .col-md-6 -->

                    </div>
                    <!-- .row -->

                </div>
                <!-- .wrapper -->

        <?php get_template_part('inc/call-to-action'); ?>

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>