<?php
/*
Template Name: Online Sales
*/
?>

<?php get_header(); ?>

<?php
  $os_f_img = get_field('os_f_img');
  $stay_online = get_field('stay_online');
  $outsourcing = get_field('outsourcing');
  $animated_arrows = get_field('animated_arrows');
?>

  <section class="featured-section">
    <img src="<?php echo $os_f_img['url']; ?>" alt="<?php echo $os_f_img['alt']; ?>">
  </section>
  
  <section class="dtz-grow-revenue">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo $stay_online['stay_online_heading']; ?></h1>
          <p><?php echo $stay_online['stay_online_des']; ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php if( have_rows('can_do_slider') ): ?>
  <section class="dtz-things-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading">Things you can do with<span><img class="things-title-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/title-logo.png" alt="DigiTecz Logo"></span></h1>
          <div class="dtz-things-slider">
            <?php while( have_rows('can_do_slider') ): the_row();
              $can_do_img = get_sub_field('can_do_img');
              $can_do_title = get_sub_field('can_do_title');
              $can_do_des = get_sub_field('can_do_des');
            ?>
            <div class="dtz-things-wrapper">
              <img class="img-fluid" src="<?php echo $can_do_img['url']; ?>" alt="<?php echo $can_do_img['alt']; ?>" />
              <h2 class="section-subheading"><?php echo $can_do_title; ?></h2>
              <p><?php echo $can_do_des; ?></p>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="dtz-outsource">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-heading"><?php echo $outsourcing['outs_heading']; ?></h1>
          <p><?php echo $outsourcing['outs_des']; ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php if( have_rows('benifits') ): ?>
  <section class="dtz-benifits">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="section-heading">Benefits</h1>
        </div>
        <?php while( have_rows('benifits') ): the_row();
          $benefit_title = get_sub_field('benefit_title');
          $benefit_description = get_sub_field('benefit_description');
        ?>
        <div class="col-md-6 dtz-benifit-item">
          <h2 class="section-subheading"><?php echo $benefit_title; ?></h2>
          <hr>
          <p><?php echo $benefit_description; ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="dtz-animated-arrows">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-12 d-none d-lg-block">
          <img class="center-logo" src="<?php echo $animated_arrows['anim_center_img']['url']; ?>" alt="<?php echo $animated_arrows['anim_center_img']['alt']; ?>">
          <div class="arrow-info left-one" data-aos="fade-right" data-aos-delay="0" data-aos-offset="-300">
            <span><?php echo $animated_arrows['left_item_one']; ?></span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-left.png" alt="circled arrow head">
          </div>
          <div class="arrow-info left-two" data-aos="fade-right" data-aos-delay="300" data-aos-offset="-350">
            <span><?php echo $animated_arrows['left_item_two']; ?></span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-left.png" alt="circled arrow head">
          </div>
          <div class="arrow-info left-three" data-aos="fade-right" data-aos-delay="600" data-aos-offset="-400">
            <span><?php echo $animated_arrows['left_item_three']; ?></span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-left.png" alt="circled arrow head">
          </div>
          <div class="arrow-info left-four" data-aos="fade-right" data-aos-delay="900" data-aos-offset="-450">
            <span><?php echo $animated_arrows['left_item_four']; ?></span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-left.png" alt="circled arrow head">
          </div>
          <div class="arrow-info right-one" data-aos="fade-left" data-aos-delay="1200" data-aos-offset="-500">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-right.png" alt="circled arrow head">
            <span><?php echo $animated_arrows['right_item_one']; ?></span>
          </div>
          <div class="arrow-info right-two" data-aos="fade-left" data-aos-delay="1500" data-aos-offset="-550">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-right.png" alt="circled arrow head">
            <span><?php echo $animated_arrows['right_item_two']; ?></span>
          </div>
          <div class="arrow-info right-three" data-aos="fade-left" data-aos-delay="1800" data-aos-offset="-600">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-right.png" alt="circled arrow head">
            <span><?php echo $animated_arrows['right_item_three']; ?></span>
          </div>
          <div class="arrow-info right-four" data-aos="fade-left" data-aos-delay="2100" data-aos-offset="-650">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-right.png" alt="circled arrow head">
            <span><?php echo $animated_arrows['right_item_four']; ?></span>
          </div>
          <div class="arrow-info bottom-last" data-aos="fade-left" data-aos-delay="2400" data-aos-offset="-700">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/online-sales/arrow-circle-right.png" alt="circled arrow head">
            <span><?php echo $animated_arrows['right_item_five']; ?></span>
          </div>
        </div>
        <div class="col-md-12 d-lg-none">
          <h1 class="section-heading text-center">Title for Section</h1>
          <ul class="fa-ul dtz-animated-list">
            <li data-aos="fade-up" data-aos-delay="0" data-aos-offset="-100"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['left_item_one']; ?></li>
            <li data-aos="fade-up" data-aos-delay="300" data-aos-offset="-125"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['left_item_two']; ?></li>
            <li data-aos="fade-up" data-aos-delay="600" data-aos-offset="-150"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['left_item_three']; ?></li>
            <li data-aos="fade-up" data-aos-delay="900" data-aos-offset="-175"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['left_item_four']; ?></li>
            <li data-aos="fade-up" data-aos-delay="1200" data-aos-offset="-200"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['right_item_one']; ?></li>
            <li data-aos="fade-up" data-aos-delay="1500" data-aos-offset="-225"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['right_item_two']; ?></li>
            <li data-aos="fade-up" data-aos-delay="1800" data-aos-offset="-250"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['right_item_three']; ?></li>
            <li data-aos="fade-up" data-aos-delay="2100" data-aos-offset="-275"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['right_item_four']; ?></li>
            <li data-aos="fade-up" data-aos-delay="2400" data-aos-offset="-300"><span class="fa-li"><i class="fal fa-check"></i></span><?php echo $animated_arrows['right_item_five']; ?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>