<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>


  <h2 class="page_title"><?php the_title(); ?></h2>


    <?php $post_type = get_post_type( get_the_ID() );

      if ($post_type == 'osteopaths') {
        echo "<div class='profile_pic'>" . get_the_post_thumbnail( $post_id, 'profile_pic', array( 200, 200) ) . "</div>";
      }
    ?>

  <?php get_template_part('templates/content', 'page'); ?>

  <?php
        if ($post_type == 'therapies') {
          get_template_part('templates/therapy-osteopaths-list', 'therapy-osteopaths-list');
        }
  ?>


  <div class="page_content">
    <div class="secondary_content">
      <?php echo the_field('secondary_content'); ?>
    </div>
  </div>
<?php endwhile; ?>
