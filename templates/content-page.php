
<div class="page_content">
  <?php the_content(); ?>
</div>

<?php
	global $post;
	$post_slug=$post->post_name;

	if($post_slug == 'all-osteopaths') {
		get_template_part('templates/osteopaths-list', 'osteopaths-list');
	}
	if($post_slug == 'class-times-and-prices') {
		get_template_part('templates/pricing-table', 'pricing');
	}
	if($post_slug == 'locations' || $post_slug == 'contact-us') {
		get_template_part('templates/locations-list', 'locations');
	}
	if($post_slug == 'our-yoga-instructors') {
		get_template_part('templates/yoga-instructor-list', 'yoga-instructor-list');
	}
?>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
