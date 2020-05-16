<?php
/*
Template Name: Inbound Marketing
*/
?>

<?php get_header(); ?>

<?php
  $social_media = get_field('social_media');
  $reputation_mng = get_field('reputation_mng');
  $paid_search = get_field('paid_search');
  $blogging = get_field('blogging');
  $content_marketing = get_field('content_marketing');
  $seo = get_field('seo');
?>

  <section class="inbound-marketing">
    <div class="container inbound-marketing-wrapper">
      <img class="img-inbound-marketing" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/inbound-marketing.svg">
      <a id="dtz-social-media" href="#dtz-social-media-modal">
        <img class="img-social-media img-hover shake" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/social-media.svg">
      </a>
      <a id="dtz-reputation-management" href="#dtz-reputation-management-modal">
        <img class="img-reputation-management img-hover shake"
          src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/reputation-management.svg">
      </a>
      <a id="dtz-paid-search" href="#dtz-paid-search-modal">
        <img class="img-paid-search img-hover shake" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/paid-search.svg">
      </a>
      <a id="dtz-blogging" href="#dtz-blogging-modal">
        <img class="img-blogging img-hover shake" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/blogging.svg">
      </a>
      <a id="dtz-content-marketing" href="#dtz-content-marketing-modal">
        <img class="img-content-marketing img-hover shake"
          src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/content-marketing.svg">
      </a>
      <a id="dtz-seo" href="#dtz-seo-modal">
        <img class="img-seo img-hover shake" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/seo.svg">
      </a>
    </div>
  </section>
  
  <div id="dtz-social-media-modal">
    <div id="closebt-container" class="close-dtz-social-media-modal">
      <img class="closebt" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/closebt.svg">
    </div>
  
    <div class="container dtz-modal-container">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="module-title font-alt"><?php echo $social_media['s_media_title']; ?></h2>
          <p><?php echo $social_media['s_media_des']; ?></p>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo $social_media['s_media_img']['url']; ?>" width="75%" height="auto" alt="<?php echo $social_media['s_media_img']['alt']; ?>">
        </div>
      </div>
    </div>
  </div>
  
  <div id="dtz-reputation-management-modal">
    <div id="closebt-container" class="close-dtz-reputation-management-modal">
      <img class="closebt" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/closebt.svg">
    </div>
  
    <div class="container dtz-modal-container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php echo $reputation_mng['rm_img']['url']; ?>" width="60%" height="auto"
            alt="<?php echo $reputation_mng['rm_img']['alt']; ?>">
        </div>
        <div class="col-sm-6">
          <h2 class="module-title font-alt"><?php echo $reputation_mng['rm_title']; ?></h2>
          <p class="text-left"><?php echo $reputation_mng['rm_des']; ?></p>
        </div>
      </div>
    </div>
  </div>
  
  <div id="dtz-paid-search-modal">
    <div id="closebt-container" class="close-dtz-paid-search-modal">
      <img class="closebt" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/closebt.svg">
    </div>
  
    <div class="container dtz-modal-container">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="module-title font-alt"><?php echo $paid_search['ps_title']; ?></h2>
          <p><?php echo $paid_search['ps_des']; ?></p>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo $paid_search['ps_img']['url']; ?>" width="60%" height="auto" alt="<?php echo $paid_search['ps_img']['alt']; ?>">
        </div>
      </div>
    </div>
  </div>
  
  <div id="dtz-blogging-modal">
    <div id="closebt-container" class="close-dtz-blogging-modal">
      <img class="closebt" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/closebt.svg">
    </div>
  
    <div class="container dtz-modal-container">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="module-title font-alt"><?php echo $blogging['blog_title']; ?></h2>
          <p><?php echo $blogging['blog_des']; ?></p>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo $blogging['blog_img']['url']; ?>" width="60%" height="auto" alt="<?php echo $blogging['blog_img']['alt']; ?>">
        </div>
      </div>
    </div>
  </div>
  
  <div id="dtz-content-marketing-modal">
    <div id="closebt-container" class="close-dtz-content-marketing-modal">
      <img class="closebt" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/closebt.svg">
    </div>
  
    <div class="container dtz-modal-container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php echo $content_marketing['cm_img']['url']; ?>" width="70%" height="auto"
            alt="<?php echo $content_marketing['cm_img']['url']; ?>">
        </div>
        <div class="col-sm-6">
          <h2 class="module-title font-alt"><?php echo $content_marketing['cm_title']; ?></h2>
          <p><?php echo $content_marketing['cm_des']; ?></p>
        </div>
      </div>
    </div>
  </div>
  
  <div id="dtz-seo-modal">
    <div id="closebt-container" class="close-dtz-seo-modal">
      <img class="closebt" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/closebt.svg">
    </div>
  
    <div class="container dtz-modal-container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php echo $seo['seo_img']['url']; ?>" width="40%" height="auto" alt="<?php echo $seo['seo_img']['alt']; ?>">
        </div>
        <div class="col-sm-6">
          <h2 class="module-title font-alt"><?php echo $seo['seo_title']; ?></h2>
          <p><?php echo $seo['seo_des']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div id="preload">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/social-media-hover.svg" width="1" height="1"
      alt="Digitecz social media image on hover" />
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/reputation-management-hover.svg" width="1" height="1"
      alt="Digitecz reputation management image on hover" />
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/paid-search-hover.svg" width="1" height="1"
      alt="Digitecz paid search image on hover" />
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/blogging-hover.svg" width="1" height="1"
      alt="Digitecz blogging image on hover" />
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/content-marketing-hover.svg" width="1" height="1"
      alt="Digitecz content marketing image on hover" />
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/inbound-marketing/seo-hover.svg" width="1" height="1"
      alt="Digitecz seo image on hover" />
  </div>

<?php get_footer(); ?>