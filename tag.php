<?php
/**
 * The template for displaying tag pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DigiTecz
 */

get_header();
?>

	<section class="dtz-blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <?php if ( have_posts() ) : ?>
            <div class="row">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id( $post->ID );
                  $featured_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                  if ($featured_alt) {

                  } else {
                    $featured_alt = get_the_title();
                  }
                  $comments_count = get_comments_number();
                  $i = 1;
                ?>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card">
                      <div class="blog-img-wrap">
                        <img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $featured_alt; ?>">
                        <span class="card-img-overlay">
                          <?php
                            $categories = get_the_category();
                            if (!in_category( 'Uncategorized' )) {
                              foreach( $categories as $category) {
                                  $cat_name = $category->name;
                                  $category_link = get_category_link( $category->term_id );

                                  echo "<a class='cat-btn btn btn-light btn-sm' href='$category_link'>" . esc_attr($cat_name) . "</a>";
                              }
                            }
                          ?>
                        </span>
                      </div>
                      <div class="card-body <?php echo $cat_name; ?>">
                        <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
                        <small class="text-muted cat">
                          <i class="fal fa-tags"></i>&nbsp;
                          <?php 
                            $tags = get_the_tag_list();
                            if(get_the_tag_list()) {
                              echo get_the_tag_list('<span>',', ','</span>');
                            }
                            ?>
                        </small>
                        <div class="card-text"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn dtz-border-btn hvr-sweep-to-top">Read More</a>
                      </div>
                      <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                        <div class="views"><?php echo get_the_date(); ?></div>
                        <div class="stats">
                          <i class="far fa-eye"></i> <?php echo do_shortcode( '[post-views]' ); ?>
                          <i class="far fa-comment"></i> <?php echo $comments_count; ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                
              <?php endwhile; ?>

              <?php wp_reset_postdata(); ?>
              <div class="container">
                <nav class="dtz-blog-pagination">
                  <?php wp_pagenavi(); ?>
                </nav>
              </div>
            </div>
          
          <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>

        <div class="col-lg-4 col-md-12">
          <?php get_sidebar(); ?>
        </div>

      </div>
    </div>
  </section>

<?php
get_footer();
