<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DigiTecz
 */

 $fw_one = get_field('fw_one', 'option');
 $fw_two = get_field('fw_two', 'option');
 $fw_three = get_field('fw_three', 'option');
 $fw_four = get_field('fw_four', 'option');

?>

  <footer>
    <section class="footer-row">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-6">
            <h4><?php echo $fw_one['w_title']; ?></h4>
            <ul class="fa-ul footer-list">
              <li><span class="fa-li"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/contact-icons/phone.svg" width="auto" height="18" alt="phone icon"></span><a href="tel:<?php echo $fw_one['phone_num']; ?>"><?php echo $fw_one['phone_num']; ?></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <h4><?php echo $fw_two['w_title']; ?></h4>
            <ul class="fa-ul footer-list">
              <li><span class="fa-li"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/contact-icons/email.svg" width="auto" height="18" alt="email icon"></span><a href="mailto:<?php echo $fw_two['email_add']; ?>"><?php echo $fw_two['email_add']; ?></a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <h4><?php echo $fw_three['w_title']; ?></h4>
            <ul class="fa-ul footer-list">
              <li><span class="fa-li"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/contact-icons/address.svg" width="auto" height="18" alt="location icon"></span><?php echo $fw_three['location_add']; ?></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <h4><?php echo $fw_four['w_title']; ?></h4>
            <ul class="list-inline footer-social">
              <li class="list-inline-item"><a href="<?php echo $fw_four['fb']; ?>"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="<?php echo $fw_four['insta']; ?>"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="<?php echo $fw_four['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a href="<?php echo $fw_four['twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="bottom-bar">
      <p>&copy; <?php echo date('Y'); ?> &bull; DigiTecz Inc. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/custom.js"></script>

  <?php wp_footer(); ?>

  </body>
</html>
