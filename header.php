<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DigiTecz
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="best digital marketing companies in Sri Lanka, best web design companies in Sri Lanka, best web development companies in Sri Lanka, best seo companies in Sri Lanka, digital marketing company in Sri Lanka, mobile & web development company in sri lanka, mobile app development company in sri lanka, web development company in sri lanka, web design company in sri lanka, software company, DigiTecz, Software company in Sri Lanka, DigiTecz Sri Lanka, web development in sri lanka, mobile application development in sri lanka, seo company in Sri Lanka, search engine optimization company in Sri Lanka, social media marketing company in Sri Lanka, digital marketing" />
  <meta name="author" content="">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto+Condensed:400,700|Volkhov:400,400i|Raleway:400,700,700i&display=swap" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/plugins.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
    $header_logo = get_field('header_logo', 'option');
  ?>
  <!-- <div class="preloader"></div> -->
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
          <img class="logo" src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#welcome">Welcome</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#what-we-do">What We Do</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/projects">Our Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
