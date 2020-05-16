<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php
  $video_section = get_field('video_section');
  $about_us = get_field('about_us');
  $i = 1;
?>

<section id="welcome" class="dtz-slider">
    <div class="video-overlay"></div>
    <video id="dtz-bg-video" poster="<?php echo $video_section['v_poster']; ?>" playsinline="playsinline" muted="muted" loop="loop">
      <source src="<?php echo $video_section['v_file']; ?>" type="video/mp4">
    </video>
    <div class="container h-100 dtz-typing">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <img class="img-fluid" width="300" height="auto" src="<?php echo $video_section['v_dtz_logo']['url']; ?>" alt="<?php echo $video_section['v_dtz_logo']['alt']; ?>">
          <h1><span id="dtz-type-writer"></span></h1>
        </div>
      </div>
    </div>
    <button id="video-pause-btn" class="btn dtz-pause-play" data-toggle="tooltip" data-placement="left" title="Pause/Play Video"><i class="fal fa-pause-circle"></i></button>
  </section>

  <section class="about-section bg-light" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo $about_us['abt_title']; ?></h1>
          <p class="heading-para"><?php echo $about_us['abt_subtitle']; ?></p>
          <p><?php echo $about_us['abt_des']; ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="what-we-do-section" id="what-we-do">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo the_field('wwd_title'); ?></h1>
          <p class="heading-para"><?php echo the_field('wwd_subtitle'); ?></p>
        </div>
      </div>
      <?php if( have_rows('what_we_do') ): ?>
      <div class="row remove-row-padding">
        <div class="expertise-blocks">
          <svg class="ex-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" width="2000" height="370px" viewBox="0 0 2000 370" enable-background="new 0 0 2000 370"
            xml:space="preserve" preserveAspectRatio="xMinYMin meet">
            <defs>
              <pattern id="water1" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
                <path fill="#8dd7c9"
                  d="M0.25,1H0c0,0,0-0.659,0-0.916c0.125-0.084,0.125,0.127,0.25,0C0.25,0.327,0.25,1,0.25,1z"></path>
              </pattern>
              <pattern id="water2" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
                <path fill="#8dd7c9"
                  d="M0.25,1H0c0,0,0-0.659,0-0.916c0.125-0.084,0.125,0.127,0.25,0C0.25,0.327,0.25,1,0.25,1z"></path>
              </pattern>
              <pattern id="water3" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
                <path fill="#8dd7c9"
                  d="M0.25,1H0c0,0,0-0.659,0-0.916c0.125-0.084,0.125,0.127,0.25,0C0.25,0.327,0.25,1,0.25,1z"></path>
              </pattern>
      
              <text id="text2" text-anchor="middle" transform="matrix(1 0 0 1 1000 200)" font-family="Arial" textLength="1320"
                font-weight="bold" font-size="140">EXPERTISE</text>
              <mask id="text-mask2">
                <use x="0" y="0" xlink:href="#text2" opacity="1" stroke="none" fill="#ffffff"></use>
              </mask>
              <mask id="column1">
                <rect x="0" y="0" width="33.33%" height="370" fill="#fff" mask="url(#text-mask2)"></rect>
              </mask>
              <mask id="column2">
                <rect x="33.33%" y="0" width="33.33%" height="370" fill="#fff" mask="url(#text-mask2)"></rect>
              </mask>
              <mask id="column3">
                <rect x="66.66%" y="0" width="33.33%" height="370" fill="#fff" mask="url(#text-mask2)"></rect>
              </mask>
            </defs>
            <rect class="color-ex" x="0" y="0" width="33.33%" height="370" fill="#127395" mask="url(#text-mask2)"></rect>
            <rect class="color-ex" x="33.33%" y="0" width="33.33%" height="370" fill="#1589b2" mask="url(#text-mask2)"></rect>
            <rect class="color-ex" x="66.66%" y="0" width="33.33%" height="370" fill="#127395" mask="url(#text-mask2)"></rect>
      
            <rect class="water-fill2" mask="url(#column1)" fill="url(#water1)" x="-344.2999999999453" y="200" width="2200"
              height="0"></rect>
            <rect class="water-fill2" mask="url(#column2)" fill="url(#water2)" x="-312.2166666667037" y="200" width="2200"
              height="0"></rect>
            <rect class="water-fill2" mask="url(#column3)" fill="url(#water3)" x="-298.6499999999996" y="200" width="2200"
              height="0"></rect>
          </svg>

            <?php while( have_rows('what_we_do') ): the_row();
              $exp_title = get_sub_field('exp_title');
              $exp_subtitle = get_sub_field('exp_subtitle');
              $exp_des = get_sub_field('exp_des');
              $exp_link = get_sub_field('exp_link');
            ?>
            <div class="col-md-4 col-sm-12 expertise-block expertise-<?php echo $i; ?>">
              <a href="<?php echo $exp_link; ?>">
                <div class="expertise-block-wrap">
                  <h4>EXPERTISE</h4>
                  <div class="expertise-section">
                    <div class="expertise-block-inner">
                      <h2><?php echo $exp_title; ?></h2>
                      <span><?php echo $exp_subtitle; ?></span>
                    </div>
        
                    <div class="expertise-block-hover">
        
                      <h2><?php echo $exp_title; ?></h2>
                      <p><?php echo $exp_des; ?></p>
                      <span>Learn More</span>
        
                    </div>
        
                  </div>
                </div>
              </a>
            </div>

            <?php $i++; ?>
            <?php endwhile; ?>

        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php if( have_rows('c_snapshots') ): ?>
  <section class="clients-section" id="our-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo the_field('snapshots_title'); ?></h1>
          <p class="heading-para"><?php echo the_field('snapshots_subtitle'); ?></p>
          <div class="dtz-client-slider">
            <?php while( have_rows('c_snapshots') ): the_row();
              $client_img = get_sub_field('client_img');
            ?>
            <div class="dtz-client-img">
              <img class="img-fluid" src="<?php echo $client_img['url']; ?>" alt="<?php echo $client_img['alt']; ?>" />
            </div>
            <?php endwhile; ?>
          </div>
          <a href="<?php echo get_site_url(); ?>/projects" class="btn dtz-border-btn hvr-sweep-to-top">View Our Projects</a>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="contact-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading">We would love to hear from you.
          <br>Let’s have a talk!</h1>
          <p class="heading-para">Digital world is about a conversation, so let’s talk. We would love to help you take your business results to the next level! Simply complete the form above and we’ll get back to you within 24 hours!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php echo do_shortcode( '[contact-form-7 id="14" title="Contact Form"]' ); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>