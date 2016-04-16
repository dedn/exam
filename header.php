<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css"/>
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/Bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body>
<div class="loader">
    <div class="loader_inner"></div>
</div>

<header>
    <div class="container">
        <h1><a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/businessplus_logo.png"
                                          alt="Main logo"></a></h1>
        <div class="telefon-hero">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>+9978 8856 999</span>
        </div>
        <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>
        <nav>
            <ul class="main-nav">
                <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
                <!--                <li><a href="#home">Home</a></li>-->
                <!--                <li><a href="#about">About US</a></li>-->
                <!--                <li><a href="#Services">Services</a></li>-->
                <!--                <li><a href="#news">News</a></li>-->
                <!--                <li><a href="#">BLOG</a></li>-->
                <!--                <li><a href="#">PAGES</a></li>-->
                <!--                <li><a href="#partners">Contact US</a></li>-->
                <!--            </ul>-->
        </nav>
    </div>
</header>
<section class="hero" id="home">
    <div class="hero-body">
        <div class="container clearfix">
            <span class="welcome">Welcome to</span>
            <h2 class="hero-title flipInX wow" data-wow-duration="1.5s"><h1><?php echo get_bloginfo(name); ?></h1></h2>
            <p class="flipInX wow" data-wow-duration="1.5s"
               data-wow-delay=".3s"><?php echo get_bloginfo(description); ?></p>
            <a class="hero-btn zoomIn wow" href="#introduction">Read More</a>
        </div>
    </div>
</section>