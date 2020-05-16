<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DigiTecz
 */

get_header();
?>

	<section class="dtz-blog-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">

          <?php
          while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            // the_post_navigation();

          endwhile; // End of the loop.
          ?>
          <div class="dtz-author-info">
            <h3>Meet the Author</h3>
            <div class="media border p-3">
              <img src="<?php echo get_wp_user_avatar_src(); ?>" class="align-self-center mr-3">
              <div class="media-body">
                <h5><?php the_author_meta('display_name'); ?></h5>
                <p><?php the_author_meta('description'); ?></p>
              </div>
            </div>
          </div>

          <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          ?>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <?php get_sidebar(); ?>
          <?php get_template_part( 'template-parts/content', 'promotions' ); ?>
        </div>

      </div>
    </div>
  </section>

<?php
get_footer();
