<?php

/**
 * Custom header for this theme
 * PSD Source: https://www.graphberry.com/item/luxestate--real-estate-landing-page
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" type="image/png" href="<?php echo  get_template_directory_uri() . '/images/favicon.png' ?>" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">


  <?php wp_head(); ?>

</head>

<body>
  <header id="home">
    <nav class="animate">
      <div class="container">
        <div class="logo left">
          <!-- Logo -->
          <a href="#home">luxestate</a>
        </div>
        <div class="menu-button hide right pointer">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu left">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'topcontacts',
              'menu_id'        => 'top-menu-contacts',
              'container'       => 'div',
              'menu_class'      => 'page-menu left',
            )
          );
          ?>
          <div class="registration flex-center">
            <div class="join-us">
              <!-- Join Us Button -->
              <li class="pointer animate"><a href="#">Join Us</a></li>
            </div>
            <div class="getting-started">
              <!-- Get Started Button -->
              <li class="main-btn pointer text-center animate"><a href="#">Get Started</a></li>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="hero">
      <div class="container">
        <div class="hero-wrapper">
          <div class="title">
            <!-- Hero Title -->
            <h1>Find Your New<br>Modern Apartment </h1>
            <div class="search lux-shadow">
              <!-- Search -->
              <input class="left" type="text" placeholder="Search Location" style="background-image: url(<?php echo get_template_directory_uri() . '/images/search.svg' ?>)">
              <button class="search-btn left">Search</button>
            </div>
          </div>
          <div class="hero-image" style="background-image: url(<?php echo get_template_directory_uri() . '/images/hero.png' ?>)">
            <div class="hero-image-info yellow-bg flex-center">
              <div class="info flex-center">
                <img src="<?php echo get_template_directory_uri() . '/images/call-icon.svg' ?>" alt="">
                <!-- Phone -->
                <p>(000) 123-4567</p>
              </div>
              <div class="info flex-center">
                <img src="<?php echo get_template_directory_uri() . '/images/point-icon.svg' ?>" alt="">
                <!-- Place -->
                <p>Melbourne,Australia</p>
              </div>
            </div>
          </div>
          <div class="slide-down text-center pointer">
            <a href="#about">
              <p>Scroll Down</p>
              <img src="<?php echo get_template_directory_uri() . '/images/scroll.svg' ?>" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!------------------------------------------------ STATISTIC SECTION -->

  <!-- править после создания футера -->
  <section class="statistic" id="contacts">
    <div class="container">