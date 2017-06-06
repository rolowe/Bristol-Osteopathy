<div class="osteopaths_list">
  <div class="row">
        <?php
          $osteopaths_args = array(
            'post_type' => 'osteopaths',
          );
          $osteopaths_query = new WP_Query($osteopaths_args);
          if ( $osteopaths_query->have_posts() ) {
            while ( $osteopaths_query->have_posts() ) {
            $osteopaths_query->the_post();

            // $connected_locations = new WP_Query( array(
            //   'connected_type' => 'location_to_osteopath',
            //   'connected_items' => get_the_id(),
            //   'nopaging' => true,
            // ) );
            ?>

                <div class="col-md-6">
                  <?php echo get_the_post_thumbnail( $post_id, array( 200, 200) ); ?>
                  <h4><?php the_title(); ?></h4>
                  <?php the_excerpt(); ?>
                  <button><a href="<?php echo get_permalink(); ?>">Read more</a></button>
                </div>
              <?php }
              wp_reset_postdata();
          }
        ?>
    </div>
  </div>
