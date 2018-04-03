<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    $show_osteopaths = get_field('show_osteopaths');
    if ($show_osteopaths[0] == 'true') {
      get_template_part('templates/osteopaths-list', 'osteopaths-list');
    }
  ?>



  <?php get_template_part('templates/child-pages', 'child-pages'); ?>



  <div class="page_content">
    <div class="secondary_content">
      <?php echo the_field('secondary_content'); ?>
    </div>
  </div>

<?php endwhile; ?>
