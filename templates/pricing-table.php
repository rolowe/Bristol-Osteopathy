
	 
	<?php if( have_rows('osteopathy_pricing') ): ?>
		
		<div class="price_lists">
			<h3>Osteopathy</h3>

		<?php

	    	while ( have_rows('osteopathy_pricing') ) : the_row();

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

		<?php
		else :
		    // no rows found
		endif;
	?>



	<?php if( have_rows('massage_pricing') ): ?>

		<div class="price_lists">
			<h3>Massage</h3>

		<?php

	    	while ( have_rows('massage_pricing') ) : the_row();

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

		<?php
		else :
		    // no rows found
		endif;
	?>



		<?php if( have_rows('therapy_pricing') ): ?>

		<div class="price_lists">
			<h3>Therapies</h3>

		<?php

	    	while ( have_rows('therapy_pricing') ) : the_row();

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

		<?php
		else :
		    // no rows found
		endif;
	?>



