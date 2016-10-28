<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$attribute_keys = array_keys( $attributes );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo htmlspecialchars( json_encode( $available_variations ) ) ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
		
		<!-- FUELED: Ordering Matrix -->

		<pre><?php //print_r($product) ?></pre>
		
		<table cellspacing="0" id="ordering-matrix" class="table">
			<thead>
				<tr class="active">
				 <th>Product Name</th>
				 <th>Image</th>
				 <th style="width:20px">S</th>
				 <th style="width:20px">M</th>
				 <th style="width:20px">L</th>
				 <th style="width:20px">XL</th>
				</tr>
			</thead>

			<pre><?php print_r($attributes); ?></pre>

			<!-- Debug -->
			Color
			<pre><?php print_r($attributes[Color]); ?></pre>
			
			Size
			<pre><?php print_r($attributes[Size]); ?></pre>

			SKU
			<?php echo $product->get_sku(); ?>
			<hr>
	
			<?php $colors = print_r($attributes[Color]); ?>

			<?php foreach ( $attributes[Color] as $attribute_name => $color ) : ?>
				<tr>
				 <td class=""><?php echo $color; ?></td>
				 <td class=""><img src="http://papiwholesale.com/media/catalog/product/cache/1/thumbnail/65x65/9df78eab33525d08d6e5fb8d27136e95/9/8/980517-740-front-thuimb.jpg"</td>

				 	<?php foreach ( $attributes[Size] as $attribute_name => $size ) : ?>
						 <td><input type="text"></td>
				 	<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</table>
		
		<!-- FUELED: END Ordering Matrix -->

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
