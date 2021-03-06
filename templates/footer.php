
<div class="footer-menu">
  <div class="container">
    <?php
      if (has_nav_menu('footer')) :
        wp_nav_menu(['theme_location' => 'footer']);
      endif;
    ?>
    <?php get_template_part('templates/locations', 'locations'); ?>
  </div>
</div>

<footer>
  <div class="container">
    &copy; 2018 <a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
 