<?php
/**
 * Template Name: Pricing Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/pricing-table', 'pricing'); ?>

  <div class="page_content">
    <div class="secondary_content">
      <?php echo the_field('secondary_content'); ?>
    </div>
  </div>
<?php endwhile; ?>
