<div class="carousel">

  <?php
  // check if the repeater field has rows of data
  if( have_rows('images') ):

      while ( have_rows('images') ) : the_row();

          $image = get_sub_field('image');
          $caption = get_sub_field('caption');
        ?>

        <div>
          <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $caption; ?>" />
          <div class="caption"><?php echo $caption; ?></div>
        </div>

        <?php
      endwhile;

  else :
      // no rows found
  endif;
  ?>

</div>

<script>
  $('.carousel').slick();
</script>
