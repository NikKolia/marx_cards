<?php
/*
 * Template Name: Contact page
 *
 * */
get_header();
?>

    <div class="main contactPage">
        <div class="contain">
            <h2 class="uk-animation-toggle" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">CONTACT US</h2>
        </div>
        <div class="contain">
            <p class="contactPageText center uk-animation-toggle" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">We love sports along with meeting new people while building solid relationships.<br>
                We strive to bring transparency, honesty, integrity with all of our business transactions.<br>
                We will do everything we can to earn our customer’s trust and respect.</p>
        </div>
        <div class="container contactForm">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 center">
                    <?php echo do_shortcode('[contact-form-7 id="28" title="Contact form"] '); ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
