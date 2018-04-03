<div class="filter">
  <span>Select by location:</span>
  <?php
      $locations_args = array(
        'post_type' => 'locations',
      );
      $locations_query = new WP_Query($locations_args);
      if ( $locations_query->have_posts() ) {
        foreach ($locations_query->posts as $location) {
          echo "<label><input type='checkbox' class='location' id='chk_" .$location->post_name. "' value='" .$location->post_name. "' /> " . $location->post_title . "</label>";
        }
      }
  ?>
</div>