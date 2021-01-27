<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Rubik">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <?php wp_head() ?>

</head>

<body class="body">

<div class="header">
    <div class="contain">
        <div class="header__conrainer">
        <div class="header__box">
            <div class="header__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__one.png" alt="Logo Marx Cards">
            </div>
            <div class="header__middle-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__two.png" alt="Main Marx Cards">
            </div>
            <!-- <div class="header__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header__one.png" alt="Logo Marx Cards">
            </div> -->
            <div class="nav-mobile-container ml-2 pr-5" style="color: green !important;">
                <!--Navbar-->
                <nav class="navbar navbar-light navbar-1 white">

                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                </nav>
                <!--/.Navbar-->
            </div>
        </div>
            <div class="nav-container">
                <?php wp_nav_menu( [
                    'theme_location' => 'primary',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] ); ?>
            </div>
        </div>
        <!-- Collapsible content -->
        <div class="text-center collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto" style="font-size: 18px">
                <li class="nav-item active">
                    <a class="nav-link" style="color: green !important;" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: green !important;" href="/services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: green !important;" href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: green !important;" href="/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: green !important;" href="/contact">CONTACT</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

    </div>
</div>