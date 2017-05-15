<div class="meta-header">
  <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> &bull; <?php echo get_bloginfo( 'description' ); ?>
</div>

<header class="banner">
  <div class="container">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo_large.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>

    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>

  </div>
</header>
