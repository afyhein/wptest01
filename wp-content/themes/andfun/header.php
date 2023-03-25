<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="2IP8XGWGiDa91rMJJVSgltt8V5CSeGNJA4nSwy0gg8E" />
    <title>Travel Agency Myanamar Co., Ltd</title>

    <!-- Third Party CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Third Party JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php
        wp_head();
    ?>
</head>
<body>
    <header>
        <div class="container">
            <a href="/" class="logo">
                <!-- <img src="<?php echo get_template_directory_uri().'/assets/img/logo.svg' ?>" alt="logo"> -->
                Logo
            </a>
            <nav class="desktop-menu">
                <a href="#banner-sec" id="link1" class="active-link">About Us</a>
                <a href="#about-sec" id="link2">Destinations</a>
                <a href="#service-sec" id="link3">About Myanmar</a>
                <a href="#contact-sec" id="link4">Our Services</a>
                <a href="#contact-sec" id="link4">Contact Us</a>
            </nav>
            <nav id="mobile-menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </nav>
        </div>
    </header>
    <div class="right-responsive-menu">
        <nav class="mobile-menu">
            <a href="#banner-sec" class="active-link" id="link1">Home</a>
            <a href="#about-sec" id="link2">About</a>
            <a href="#service-sec" id="link3">Services</a>
            <a href="#contact-sec" id="link4">Contact</a>
        </nav>
    </div>