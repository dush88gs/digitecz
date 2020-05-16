<?php
/*
Template Name: Web Design
*/
?>

<?php get_header(); ?>

<?php
  $web_dad_f_img = get_field('web_dad_f_img');
  $right_place_title = get_field('right_place_title');
  $right_place_des = get_field('right_place_des');
  $our_process_title = get_field('our_process_title');
  $our_process_des = get_field('our_process_des');
?>

  <section class="featured-section">
    <img src="<?php echo $web_dad_f_img['url']; ?>" alt="<?php echo $web_dad_f_img['alt']; ?>">
  </section>
  
  <section class="right-place">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo $right_place_title; ?></h1>
          <p><?php echo $right_place_des; ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="call-to-action">
    <h2 class="action-heading">Want <span class="highlight-text">to</span> see our previous work?</h2>
    <a href="<?php echo get_site_url(); ?>/projects" class="btn dtz-border-btn hvr-sweep-to-top">Our Projects</a>
  </section>
  <section class="our-process">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo $our_process_title; ?></h1>
          <p><?php echo $our_process_des; ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="call-to-action">
    <div>
      <h1 class="action-heading">Ready <span class="highlight-text">to</span> discuss your project?</h1>
      <a href="<?php echo get_site_url(); ?>#contact" class="btn dtz-border-btn hvr-sweep-to-top">Work with Us</a>
    </div>
  </section>

<?php get_footer(); ?>