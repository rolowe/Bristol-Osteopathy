<div class="osteopaths_list">

  <h2>Our Osteopaths</h2>

  <div class="row">
        <?php
          $osteopaths_args = array(
            'post_type' => 'osteopaths',
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

                <div class="col-md-6 <?php foreach ($connected_locations as $location) { echo $location->post_name . " "; } ?>">

                  <?php echo get_the_post_thumbnail( $post_id, array( 200, 200) ); ?>
                  <h4><?php the_title(); ?></h4>

                  <p>
                    <?php
                      foreach ($connected_locations as $location) {
                        echo "<span class='location'>" . $location->post_title . " </span>";
                      }
                    ?>
                  </p>

                  <?php the_excerpt(); ?>
                  <button><a href="<?php echo get_permalink(); ?>">Read more</a></button>
                </div>
              <?php }
              wp_reset_postdata();
          }
        ?>
    </div>
  </div>
