<div class="container text-center lg-moon-container cont-space-above">
	<div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
			<img class="header-pic" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/moonbox-page/header.jpg" alt="">
			<h4>MoonBox is a subscription to a set of spiritual goodies, arriving
			at your doorstep before each full moon. With your
			membership, you will receive moonly, guided mantras and
			meditations, as well as access to a discussion forum where you
			can share your MoonBox experience with like-minded spirit
			seekers. </h4>
		</div>
		
	</div>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
			<div class="col-md-3 moonbox-container">
				<span class="mb-lv1">
					<h4>Artemis</h4>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/moonbox-page/example-box-set.jpg" alt="" class="img-responsive header-logo">
				</span>
				Includes: <br>
				3 Crystals
				<br>
				<br>
				<br>
				<br>
				<select id="moonbox-dropdown1">

					<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 12,
						'product_tag' => 'mb-lvl1',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
						$duration = get_post_meta( get_the_ID(), 'duration', true );
						$price = $product->price;
						$monthPrice = $price / $duration;
						if($duration > 1)
							{$plural = 's';}
						else
							{$plural = '';}
						echo '<option value="'.$monthPrice.'" id="'.$duration.'">'.$duration.' month'.$plural.'</option>';
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</select>

				
				<button id="moonbox-submit1" class="btn btn-success">Details</button>
			</div> <!-- col-sm -->

			<div class="col-md-3 moonbox-container">
				<span class="mb-lv2">
					<h4>Juna</h4>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/moonbox-page/example-box-set.jpg" alt="" class="img-responsive header-logo">
				</span>
				Includes: <br>
				3 crystals and 2 additional items 
				<br>
				<br>
				<br>
				<br>
				<select id="moonbox-dropdown2">

					<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 12,
						'product_tag' => 'mb-lvl2',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
						$duration = get_post_meta( get_the_ID(), 'duration', true );
						$price = $product->price;
						$monthPrice = $price / $duration;
						if($duration > 1)
							{$plural = 's';}
						else
							{$plural = '';}
						echo '<option value="'.$monthPrice.'"  id="'.$duration.'">'.$duration.' month'.$plural.'</option>';
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</select>

				
				<button id="moonbox-submit2" class="btn btn-success">Details</button>
			</div>   <!-- col-sm -->
			<div class="col-md-3 moonbox-container">
				<span class="mb-lv3">
					<h4>Luna</h4>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/moonbox-page/example-box-set.jpg" alt="" class="img-responsive header-logo">
				</span>
				Includes: <br>
				3 crystals and 3 additional items, including one sterling silver wire-wrap. 
				<br>
				<br>
				<select id="moonbox-dropdown3">

					<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 12,
						'product_tag' => 'mb-lvl3',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
						$duration = get_post_meta( get_the_ID(), 'duration', true );
						$price = $product->price;
						$monthPrice = $price / $duration;
						if($duration > 1)
							{$plural = 's';}
						else
							{$plural = '';}
						echo '<option value="'.$monthPrice.'"  id="'.$duration.'" >'.$duration.' month'.$plural.'</option>';
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
					?>
				</select>

				
				<button id="moonbox-submit3" class="btn btn-success">Details</button>
			</div>  <!-- col-sm -->
		</div> <!-- col-xs-10 -->
	</div>
</div>