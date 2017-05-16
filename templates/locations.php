<div class="locations">
  <?php
    $locations = get_field('locations', 'option');
    //print_r($locations);

    foreach ($locations as $location) {
      echo $location['name'];
      echo "<span>" . $location['number'] . "</span>";
    }
  ?>
</div>
