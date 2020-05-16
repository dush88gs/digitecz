<?php
/* Digitecz Promotions */

$promotions = get_field('promotions', 'option');
?>

<?php if( have_rows('promotions', 'option') ): ?>
<div class="dtz-promo-slider">
  <?php while( have_rows('promotions', 'option') ): the_row();
    $promo_img = get_sub_field('promo_img');
  ?>
  <div class="dtz-promo-img">
    <img class="img-fluid" src="<?php echo $promo_img['url']; ?>" alt="<?php echo $promo_img['alt']; ?>" />
  </div>
  <?php endwhile; ?>
</div>
<div class="text-center dtz-promo-call">
  <img class="dtz-promo-phone animated pulse" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/blog/phone-ringing.svg" width="auto" height="60" alt="phone ringing">
  <a href="tel:0715156797" class="btn dtz-border-btn hvr-sweep-to-top dtz-promo-btn">Call Us - 0715 15 67 97</a>
</div>
<?php endif; ?>