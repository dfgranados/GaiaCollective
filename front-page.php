
	<div class="row">
		<div class="col-sm-12">
	<img class="header-pic" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home-page/header.jpg" alt="">
	</div>
	</div>
	<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 ">
				<img class="home-pic-3 img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home-page/moonbox.jpg" alt="">
				<button class="btn-block"><h4>crystals every full moon</h4></button>
				<br>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-4  col-sm-offset-0 ">
				<img class="home-pic-3 img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home-page/home-custom.jpg" alt="">
				<button class="btn-block"><h4>get it custom</h4></button>
				<br>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0  ">
				<img class="home-pic-3 img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home-page/home-blog.jpg" alt="">
				<button class="btn-block"><h4>latest from us</h4></button>
				<br>
			</div>
		</div> <!-- row -->
	<div class="row new-products">
	<h3 class="home-title text-center blue-box">new pieces</h3>
	<br>
		<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 4,
			'product_tag' => 'piece'
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
			<div class="col-sm-4 col-md-3" <?php post_class( $classes ); ?>>

				<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

				<a href="<?php the_permalink(); ?>">

					<?php
						/**
						 * woocommerce_before_shop_loop_item_title hook
						 *
						 * @hooked woocommerce_show_product_loop_sale_flash - 10
						 * @hooked woocommerce_template_loop_product_thumbnail - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item_title' );
						?>
					</a>


				</div>

				<? endwhile;
			} else {
				echo __( 'No products found' );
			}
			wp_reset_postdata();
			?>

		<div class="col-sm-2 col-sm-offset-10">
			<a href="index.php/jewelry"><h4 class="text-center">see more >> </h4></a>
		</div>
		</div> <!-- row -->
		<!-- <hr>
		<div class="row home-instagram">
			<h3 class="text-center">follow <span class="blue-box">@gaiacollective</span> on instagram</h3> -->
			<?php 
			/*echo do_shortcode("[iconosquare_widget]"); */
			?>
		<!-- </div> -->