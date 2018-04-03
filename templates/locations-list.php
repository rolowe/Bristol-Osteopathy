<div class="locations_list">

    <div class="row">
        <?php
          $locations_args = array(
            'post_type' => 'locations',
            'posts_per_page' => -1,
            'order'          => 'ASC'
          );
          $locations_query = new WP_Query($locations_args);

          foreach ($locations_query->posts as $location) {
            $map_embed = get_field("map_embed", $location->ID);
            echo "<div class='col-md-4 location'>";
              echo "<h3>" . $location->post_title . "</h3>";
              echo $map_embed;
              echo $location->post_content;
            echo "</div>";
          }


        ?>
    </div>

  </div>
