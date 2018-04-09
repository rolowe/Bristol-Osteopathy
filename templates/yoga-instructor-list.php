<div class="osteopaths_list">

  <?php  ?>

  <?php
    if( have_rows('instructors') ):

      get_template_part('templates/location-filter', 'location-filter');

      echo '<div class="row">';

        while ( have_rows('instructors') ) : the_row();
            $instructor_object = get_sub_field('instructor');
            $instructor_id = $instructor_object->ID;
            $instructor_title = $instructor_object->post_title;
            $instructor_excerpt = $instructor_object->post_excerpt;
            $instructor_link = $instructor_object->guid;
            
            $connected_locations = get_posts( array(
              'connected_type' => 'location_to_osteopath',
              'connected_items' => $instructor_id,
              'nopaging' => true,
              'suppress_filters' => false
            ) );

            ?>

                  <div class="col-md-6 osteo <?php foreach ($connected_locations as $location) { 
                  echo $location->post_name . "_osteo "; 
                } ?>">

                    <a href="<?php echo $instructor_link; ?>"><?php echo get_the_post_thumbnail( $instructor_id, array( 200, 200) ); ?></a>
                    <h4><a href="<?php echo $instructor_link; ?>"><?php echo $instructor_title; ?></a></h4>

                    <p>
                      <?php
                        foreach ($connected_locations as $location) {
                          echo "<span class='location'>" . $location->post_title . " </span>";
                        }
                      ?>
                    </p>

                    <p><?php echo $instructor_excerpt; ?></p>
                  </div>

            <?php
        endwhile;
        echo '</div>';
    else :
        // no rows found
    endif;
  ?>


    

  </div>
