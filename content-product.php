<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<div class="col-sm-4 col-md-3 product-listing" <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

	<a href="<?php the_permalink(); ?>">
		<div class="feed-img">
			<div class="hover-text centered">
				
				<p><?php echo get_post_meta($post->ID,'stone',true) ?> <?php echo get_post_meta($post->ID,'jtype',true) ?> wrapped in <?php echo get_post_meta($post->ID,'wire_type',true) ?></p>
				
				<hr>
					<?php
					if ( $product->is_in_stock() ) {
					$price = get_post_meta( get_the_ID(), '_regular_price', true);
					echo '$'.$price;
					}
					else
					{
						echo "sold<br><a class='hover-custom' href=''>customize a similar piece</a>";
					}
					?>

				
		</div> <!-- hover text -->
		</div>
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		<div class="row sub-listing">
			<div class="col-xs-offset-2 col-xs-5">
		<p><?php echo get_post_meta($post->ID,'stone',true) ?></p>
			</div>
		<div class="col-xs-2">
			<?php
			if ( $product->is_in_stock() ) {
			$price = get_post_meta( get_the_ID(), '_regular_price', true);
			echo '<p>$'.$price.'</p>';
			}
			else
			{
				echo "<p>sold</p>";
			}
			?>
		</div>
		</div>
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			/*do_action( 'woocommerce_after_shop_loop_item_title' );*/
		?>

	</a>



	<?php /*do_action( 'woocommerce_after_shop_loop_item' );*/ ?>

</div>

	<?php
			if (! $product->is_in_stock() ) {
				echo "
				<div class='row text-center mobile-custom-link' style='margin-top:-30px'>
				<br>
				<a class='hover-custom' href='custom'>
				customize a piece
				<a>
				</div>";
			}
			?>