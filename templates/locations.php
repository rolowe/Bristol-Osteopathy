<div class="locations">
  <?php
    $locations = get_field('locations', 'option');
    //print_r($locations);

    foreach ($locations as $location) {
    	echo "<span class='location-item'>";
      	echo $location['name'];
      	echo "<span class='tel'>" . $location['number'] . "</span>";
      	echo "</span>";
    }
  ?>
</div>
