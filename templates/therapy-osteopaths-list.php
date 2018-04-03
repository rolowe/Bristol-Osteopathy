<div class="osteopaths_list">

    

    
        <?php
          $osteopaths_args = array(
              'connected_type' => 'osteopaths_to_therapies',
              'connected_items' => get_the_ID(),
              'nopaging' => true,
              'suppress_filters' => false
          );
          $osteopaths_query = new WP_Query($osteopaths_args);
          
          if ( $osteopaths_query->have_posts() ) {

            get_template_part('templates/location-filter', 'location-filter');

            ?>

              <div class="row">

            <?php

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

                  <p>
                    <?php
                      foreach ($connected_locations as $location) {
                        echo "<span class='location'>" . $location->post_title . " </span>";
                      }
                    ?>
                  </p>

                  <?php the_excerpt(); ?>
                </div>
              <?php } 
              wp_reset_postdata(); ?>
           
              
    </div>

    <a href="/all-osteopaths/" class="btn all"><button>View all Osteopaths</button></a>
          <?php } ?>


    

  </div>
