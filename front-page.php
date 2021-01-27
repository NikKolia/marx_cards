<?php
/*
Template Name: Main page
*/
?>
<?php get_header(); ?>

   <div class="main">
       <img class="main__topline" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_line.png" alt="">

    </div>

    <!-- <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                </div>
            </div>
        </div>
    </div> -->

    <div class="main__section">
        <?php echo do_shortcode('[slide-anything id=29]'); ?>
        <img class="main__downline" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_line.png" alt="">
    </div>

    <div class="main" style="font-family: 'Rubik', serif;">
        <div class="contain">
            <h2 class="uk-animation-toggle uk-scrollspy-inview uk-animation-scale-up" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" style="">THE HOME OF PSA GROUP SUBMISSIONS SPORTS CARD GRADING</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main__img-two.jpg" alt="" class="main__img-two">
             <p class="main__text">We take your raw sports cards and have them  authenticated and graded by one of the most well established and respected grading and authentication companies in the world.</p>
        </div>
    </div>

    <div class="section2">
        <div class="section2__text" style="font-family: 'Rubik', serif;">
            <span class="text-center">PSA DROP OFF & PICK UP   CROSSOVER AVAILABLE   DM FOR MORE INFO</span>
            <div class="section1__button">NEW SERVICE LEVEL</div>
        </div>
    </div>

<?php get_footer(); ?>