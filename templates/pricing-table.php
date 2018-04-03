
	<?php if( have_rows('price_category') ): ?>
		

	<?php while ( have_rows('price_category') ) : the_row();
			$price_title = get_sub_field('price_title');
	?>

			<div class="price_lists">


			<h3><?php echo $price_title; ?></h3>

			<?php
	    		while ( have_rows('price_option') ) : the_row();

		        // display a sub field value
		        $name = get_sub_field('name');
		        $desc = get_sub_field('description');
		        $price = get_sub_field('price');
		        $link = get_sub_field('link');
			?>

		       <div class="price_row">
		       		<?php if ($name != "") { ?><div class="price_name"><p><?php echo $name; ?></p></div><?php } ?>
		       		<?php if ($desc != "") { ?><div class="price_desc"><p><?php echo $desc; ?></p></div><?php } ?>
		       		<?php if ($price != "") { ?><div class="price_amount"><p><?php echo $price; ?></p></div><?php } ?>
		       		<?php if ($link != "") { ?>
			       		<div class="price_link">
			       			<a href="<?php echo $link; ?>" class="btn">More info</a>
			       		</div>
		       		<?php } ?>
		       </div>

		       <?php endwhile; ?>

		       </div>
		       
		       <?php endwhile; ?>

		<?php
		else :
		    // no rows found
		endif;
	?>
