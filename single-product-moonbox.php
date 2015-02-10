<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


?>

<div class="container cont-space-above">
	<div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
	<div class="row">
		<div class="col-sm-3 col-sm-offset-1 col-xs-12">
		<div class="vcenter">

		 <p style="color: #aaa"><?php echo get_the_content() ?><p>
		<br>
		</div>
	</div> <!-- col-sm-4 -->

	<div class="col-sm-4">
		<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	do_action( 'woocommerce_before_single_product' );

	if ( post_password_required() ) {
		echo get_the_password_form();
		return;
	}
	?>
	<!-- product image -->
	<div class="prod-image product-listing">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>
	</div><!-- col-sm-4 -->
	
	<div class="col-sm-3 text-center">
			<div class="summary entry-summary vcenter"> <!-- summary and checkout options -->

				<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>

		</div><!-- .summary -->
		or
		<br>
		<a href="" class="hover-custom">only sign up for moonbox updates</a>
	</div><!-- col-sm-4 -->
	
	</div> <!-- row -->
</div><!-- col-sm-8 col-sm-offset-2 -->
</div> <!-- container -->

	<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		/*do_action( 'woocommerce_after_single_product_summary' );*/
		?>

		<meta itemprop="url" content="<?php the_permalink(); ?>" />

	</div><!-- #product-<?php the_ID(); ?> -->



<?php /*do_action( 'woocommerce_after_single_product' );*/ ?>
