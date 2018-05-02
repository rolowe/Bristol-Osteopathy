<div class="osteopaths_list">

  <h2>Our Osteopaths</h2>

    <?php get_template_part('templates/location-filter', 'location-filter'); ?>

    <div class="row">
        <?php
          global $post;
          $post_slug=$post->post_name;

          if($post_slug == 'all-osteopaths') {
            $osteo_count = "-1";
          } else {
            $osteo_count = "4";
          }

          $osteopaths_args = array(
            'post_type' => 'osteopaths',
            'posts_per_page' => $osteo_count,
            'order'          => 'ASC',
            'meta_query' => array(
              'relation' => 'OR',
                array(
                  'key' => 'job_type',
                  'value' => 'osteopath'
                )
            )
          );

          $osteopaths_query = new WP_Query($osteopaths_args);
          if ( $osteopaths_query->have_posts() ) {

            while ( $osteopaths_query->have_posts() ) {
            $osteopaths_query->the_post();

            $connected_locations = get_posts( array(
              'connected_type' => 'location_to_osteopath',
              'connected_items' => get_the_ID(),
              'nopaging' => true,
              'suppress_filters' => false
            ) );
            
            ?>

                <div class="col-md-6 osteo <?php foreach ($connected_locations as $location) { 
                  echo $location->post_name . "_osteo "; 
                } ?>">

                  <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, array( 200, 200) ); ?></a>
                  <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>

                  <ul class="location_attr">
                    <?php
                      foreach ($connected_locations as $location) {
                        echo "<li><span class='location'>" . $location->post_title . " </span></li>";
                      }
                    ?>
                  </ul>

                  <?php the_excerpt(); ?>
                </div>
              <?php }
              wp_reset_postdata();
          }
        ?>
    </div>

    <?php if($post_slug != 'all-osteopaths') { ?>
      <a href="/bristol-osteopathy/all-osteopaths/" class="btn all"><button>View all Osteopaths</button></a>
    <?php } ?>

  </div>
