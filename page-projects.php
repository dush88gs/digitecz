<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

<?php
  $args = array(
    'post_type' => 'our_projects',
    'post_status' => 'publish',
    'posts_per_page' => -1
  );
  $projects_query = new WP_Query( $args );
?>

  <section class="dtz-projects">
    <div class="container content">
      <div class="grid row">
        <?php if ( $projects_query->have_posts() ) : while ( $projects_query->have_posts() ) : $projects_query->the_post();
          $project_img = get_field('project_img');
          $project_link = get_field('project_link');
        ?>
        <div class="col-md-4 col-sm-6">
          <figure class="effect-jazz">
            <img src="<?php echo $project_img['url']; ?>" alt="<?php echo $project_img['alt']; ?>" />
            <figcaption>
              <h2><?php the_title(); ?></h2>
              <p><span class="text-overlay">View This Project</span></p>
              <a href="<?php echo $project_link; ?>" target="_blank"></a>
            </figcaption>
          </figure>
        </div>
        <?php endwhile; else : ?>
          <p>There are no Projects exist</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>