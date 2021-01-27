<?php
/*
 * Template Name: Services page
 *
 * */
get_header();
?>

    <div class="main servicesPage">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h2>PSA GROUP
                        SUBMISSION</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 left">
                    <div class="need-help_container-sm need-help_container">
                        <div class="block_left">
                            <p class="left_top">NEED HELP?</p>
                            <p class="left_title">SEARCH CARD VALUES:</p>
                            <p class="left_link"><a target="_blank" href="https://www.ebay.com/">www.ebay.com</a></p>
                            <p class="left_link"><a target="_blank" href="https://130point.com/">www.130point.com</a></p>
                            <p class="left_link"><a target="_blank" href="https://cardsnoop.com/">www.cardsnoop.com</a></p>
                            <p class="left_link"><a target="_blank" href="http://cardmavin.com/">www.cardmavin.com</a></p>
                            <p class="left_link"><a target="_blank" href="https://www.psacard.com/">www.psacard.com</a></p>
                        </div>
                        <div class="block_left">
                            <p class="left_title">HAVE A QUESTION?</p>
                            <p class="left_link"><a href="mailto:info@marxcards.com">info@marxcards.com</a></p>
                            <p class="left_link"><a target="_blank" href="https://www.instagram.com/">Instagram</a></p>
                            <p class="left_link"><a target="_blank" href="https://twitter.com/">Twitter</a></p>
                        </div>
                        <div class="block_left">
                            <p class="left_title">INFO:</p>
                            <p class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">All times are estimated</p>
                            <p class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">No cleaning/inspection offered</p>
                            <p class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">All cards will be dropped off and picked up at PSA headquarters</p>
                            <p class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">We are not responsible for lost mail, it is advised to add insurance</p>
                            <span style="font-weight: bolder">Return Shipping Fees</span> (Insurance NOT Included)<br>

                            <span style="font-weight: bolder">Return Shipping 1 - 20 cards</span> = $9.00<br>
                            <span style="font-weight: bolder">Return Shipping 21 - 55 cards</span> = $15.00<br>
                            <span style="font-weight: bolder">Return Shipping 56+ </span> = $30.00<br>


<!--                    <img style="width: 306px" class="mt-3" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/shipping.jpeg" alt="">-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 right">
                    <div class="block">
                        <h3 class="center">5 DAY SERVICE</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">5 business day estimate</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">DV up to $1999 per card</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">$65 per card</p>
                            </div>
                            <div class="col-md-4 center quant">
                                <p>QUANTITY</p>
                                <p class="quant_number"><input id="first" oninput="calculatePayment()" placeholder="0" type="number" min="0"></p>
                                <p>cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h3 class="center">10 DAY SERVICE</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">10 business day estimate</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">DV up to $999 per card</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">$50 per card</p>
                            </div>
                            <div class="col-md-4 center quant">
                                <p>QUANTITY</p>
                                <p class="quant_number"><input id="second" oninput="calculatePayment()" placeholder="0" type="number" min="0"></p>
                                <p>cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h3 class="center">REGULAR SERVICE</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">Time Varies</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">DV up to $499 per card</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">$26 per card</p>
                            </div>
                            <div class="col-md-4 center quant">
                                <p>QUANTITY</p>
                                <p class="quant_number"><input id="third" oninput="calculatePayment()" placeholder="0" type="number" min="0"></p>
                                <p>cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h3 class="center">Ecomony Ultra Modern 2018 and Newer</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">Time Varies</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">DV up to $99 per card</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">$16 per card</p>
                            </div>
                            <div class="col-md-4 center quant">
                                <p>QUANTITY</p>
                                <p class="quant_number"><input id="fourth" oninput="calculatePayment()" placeholder="0" type="number" min="0"></p>
                                <p>cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h3 class="center">Economy Modern 1972 to 2017</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">Time Varies</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">Graded value up to $99 per card</p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="star" class=" ">$13 per card</p>
                            </div>
                            <div class="col-md-4 center quant">
                                <p>QUANTITY</p>
                                <p class="quant_number"><input id="fifth" oninput="calculatePayment()" placeholder="0" type="number" min="0"></p>
                                <p>cards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action=" " method="get" id="form">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 center">
                        <div style="border: 3px solid black;padding: 1rem;border-radius: 1rem;">
                            <h3>ORDER DETAILS</h3>
                            <div class="row">
                                <div class="col-6">
                                    <p>Service:</p>
                                    <p>5 DAY SERVICE</p>
                                    <p>10 DAY SERVICE</p>
                                    <p>REGULAR SERVICE</p>
                                    <p>Ecomony Ultra Modern 2018 and Newe</p>
                                    <p>Economy Modern 1972 to 2017</p>
                                </div>
                                <div class="col-3">
                                    <p>Quantity:</p>
                                    <p id="firstQuantity">0</p>
                                    <p id="secondQuantity">0</p>
                                    <p id="thirdQuantity">0</p>
                                    <p id="fourthQuantity">0</p>
                                    <p id="fifthQuantity">0</p>
                                </div>
                                <div class="col-3">
                                    <p>Total cost:</p>
                                    <p id="firstSum">0</p>
                                    <p id="secondSum">0</p>
                                    <p id="thirdSum">0</p>
                                    <p id="fourthSum">0</p>
                                    <p id="fifthSum">0</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>SUBTOTAL:</p>
                                </div>
                                <div class="col-3">
                                </div>
                                <div class="col-3">
                                    <p id="subtotal">0</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>SHIPPING:</p>
                                </div>
                                <div class="col-3">
                                </div>
                                <div class="col-3">
                                    <p id="shipping">0</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>TOTAL:</p>
                                </div>
                                <div class="col-3">
                                    <p id="quantity">0</p>
                                </div>
                                <div class="col-3">
                                    <p id="total">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row justify-content-center align-items-center" style="margin-top: 25px">
                <div class="col-md-6 center">
                    <div style="border: 3px solid black;padding: 1rem;border-radius: 1rem;">
                        <h3>PAYMENT</h3>
                        <?php echo do_shortcode("[wpep_form]"); ?>
                        <span>By clicking Submit, you authorize Marx Cards to charge your credit card for this order, and you accept Marx Cards <a
                                    target="_blank" href="/terms-and-services">Terms of Service.</a></span>
                    </div>
                </div>
            </div>
<!--            <div class="row justify-content-center align-items-center">-->
<!--                <div class="col-md-4 center terms">-->
<!--                    <a target="_blank" href="https://squareup.com/us/en/legal/general/payment">Terms and Services</a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <script>
            function calculatePayment() {
                let first = document.getElementById('first').value;
                let second = document.getElementById('second').value;
                let third = document.getElementById('third').value;
                let fourth = document.getElementById('fourth').value;
                let fifth = document.getElementById('fifth').value;
                let subtotal = 0;
                let shipping = 0;
                let quantity = 0;

                if(first != '') {
                    let sum = first * 65 + '';
                    quantity += Number(first);
                    document.getElementById('firstQuantity').innerHTML = first;
                    document.getElementById('firstSum').innerHTML = sum + ' USD';
                    document.getElementsByName("5_day")[0].value = first;
                    subtotal += Number(sum);
                }

                if(second != '') {
                    let sum = second * 50 + '';
                    quantity += Number(second);
                    document.getElementById('secondQuantity').innerHTML = second;
                    document.getElementById('secondSum').innerHTML = sum + ' USD';
                    document.getElementsByName("10_day")[0].value = second;
                    subtotal += Number(sum);
                }

                if(third != '') {
                    let sum = third * 26 + '';
                    quantity += Number(third);
                    document.getElementById('thirdQuantity').innerHTML = third;
                    document.getElementById('thirdSum').innerHTML =  sum + ' USD';
                    document.getElementsByName("20_day")[0].value = third;
                    subtotal += Number(sum);
                }

                if(fourth != '') {
                    let sum = fourth * 16 + '';
                    quantity += Number(fourth);
                    document.getElementById('fourthQuantity').innerHTML = fourth;
                    document.getElementById('fourthSum').innerHTML = sum + ' USD';
                    document.getElementsByName("45_day")[0].value = fourth;
                    subtotal += Number(sum);
                }

                if(fifth != '') {
                    let sum = fifth * 13 + '';
                    quantity += Number(fifth);
                    document.getElementById('fifthQuantity').innerHTML = fifth;
                    document.getElementById('fifthSum').innerHTML = sum + ' USD';
                    document.getElementsByName("crossover")[0].value = fifth;
                    subtotal += Number(sum);
                }

                if (quantity > 0 && quantity < 21) {
                    shipping = 9;
                    document.getElementById('shipping').innerHTML = '9 USD';
                }

                if (quantity > 20 && quantity < 56) {
                    shipping = 15;
                    document.getElementById('shipping').innerHTML = '15 USD';
                }

                if (quantity > 55) {
                    shipping = 30;
                    document.getElementById('shipping').innerHTML = '30 USD';
                }

                total = subtotal + shipping;
                document.getElementById('subtotal').innerHTML = subtotal + ' USD';
                document.getElementById('total').innerHTML = total + ' USD';
                document.getElementById('quantity').innerHTML = quantity + '';
                document.getElementsByName("wpep-selected-amount")[0].value = total + '';
                document.getElementById('amount_display_1').innerHTML = total + '';

            }
        </script>
    </div>



<?php
get_footer();
