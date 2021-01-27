<?php
/*
 * Template Name: Payment Receipt
 *
 * */
get_header();
?>

    <div class="main list-style servicesPage p-5">
        <div class="float-right">
            <?php echo do_shortcode("[save_as_pdf_pdfcrowd]"); ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img style="width: 300px" class="main__topline" src="<?php echo get_template_directory_uri(); ?>/assets/images/header__one.png" alt="">
            </div>
        </div>
        <div class="row  mt-4">
            <div class="col-3">
                <div class="left_box pr-3">
                    <h4>Contact Info</h4>
                    <span>
                        email: info@marxcards.com
                    </span><br>
<!--                    <span>-->
<!--                        instagram:-->
<!--                    </span><br>-->
<!--                    <span>-->
<!--                        twitter:-->
<!--                    </span>-->
                </div>
            </div>
            <div class="col-6">
                <div class="center_box">
                    <?
                        $str_arr = explode(',', $_GET['nm']);
                    ?>
                    <h3>Thank you for your business and good luck!</h3>
                    <h3>PAYMENT INFO</h3>
                    <span>Name: <?= $str_arr[0] ?></span><br>
                    <span>Email: <?= isset($_GET['em']) ? $_GET['em'] : '' ?></span><br>
<!--                    <span>Phone: </span><br>-->
                    <span>Social Media Name: <?= $str_arr[1] ?></span><br>
                    <span>Total amount: <?= isset($_GET['am']) ? $_GET['am'] : '' ?></span><br>
                    <div class="text-center">
                        Ship to: <br>
                        MC <br>
                        PO Box 580 <br>
                        Port Hueneme CA 93044 <br>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="right_box pr-3">
                    <h3>Shipping Instructions</h3>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" "
                            style="height: 22px;margin-bottom: 4px;"> No packing tape on protector</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" "
                            style="height: 22px;margin-bottom: 4px;"> 1 team bag per 8 cards</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" "
                            style="height: 22px;margin-bottom: 4px;"> Top loader card saved</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" "
                            style="height: 22px;margin-bottom: 4px;"> Printed copy of receipt</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" "
                            style="height: 22px;margin-bottom: 4px;"> Separate cards by service level</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-12">
                <h2>
                    PLEASE INCLUDE A COPY OF THIS RECEIPT IN YOUR PACKAGE
                </h2>
            </div>
        </div>
    </div>

<?php
get_footer();

