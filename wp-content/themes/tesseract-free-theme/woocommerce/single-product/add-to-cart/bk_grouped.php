<?php

/**

 * Grouped product add to cart

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/grouped.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see 	    https://docs.woothemes.com/document/template-structure/

 * @author 		WooThemes

 * @package 	WooCommerce/Templates

 * @version     3.5.1

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



global $product, $post;



$parent_product_post = $post;



do_action( 'woocommerce_before_add_to_cart_form' ); ?>



<form class="cart" method="post" enctype='multipart/form-data'>

	<table cellspacing="0" class="group_table">

		<tbody>

			<?php

				foreach ( $grouped_products as $product_id ) :

					if ( ! $product = wc_get_product( $product_id ) ) {

						continue;

					}



					if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) && ! $product->is_in_stock() ) {

						continue;

					}



					$post    = $product->post;

					setup_postdata( $post );

					?>

					<tr>

						<td>

							<?php if ( $product->is_sold_individually() || ! $product->is_purchasable() ) : ?>

								<?php woocommerce_template_loop_add_to_cart(); ?>

							<?php else : ?>

								<?php

									$quantites_required = true;

									woocommerce_quantity_input( array(

										'input_name'  => 'quantity[' . $product_id . ']',

										'input_value' => ( isset( $_POST['quantity'][$product_id] ) ? wc_stock_amount( $_POST['quantity'][$product_id] ) : 0 ),

										'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 0, $product ),

										'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product )

									) );

								?>

							<?php endif; ?>

						</td>



						<td class="label">

							<label for="product-<?php echo $product_id; ?>">

								<?php echo $product->is_visible() ? '<a href="' . esc_url( apply_filters( 'woocommerce_grouped_product_list_link', get_permalink(), $product_id ) ) . '">' . esc_html( get_the_title() ) . '</a>' : esc_html( get_the_title() ); ?>

							</label>

						</td>



						<?php do_action ( 'woocommerce_grouped_product_list_before_price', $product ); ?>



						<td class="price">

							<?php

								echo $product->get_price_html();



								if ( $availability = $product->get_availability() ) {

									$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

									echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );

								}

							?>

						</td>

					</tr>

					<?php

				endforeach;



				// Reset to parent grouped product

				$post    = $parent_product_post;

				$product = wc_get_product( $parent_product_post->ID );

				setup_postdata( $parent_product_post );

			?>

		</tbody>

	</table>



	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />



	<?php if ( $quantites_required ) : ?>



		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		

        <?php $woobutton_bgcolor = get_theme_mod('tesseract_woocommerce_buttonbgcolor'); ?>

		<?php $woobutton_brderradius = get_theme_mod('tesseract_woocommerce_button_radius'); ?>

		<?php $woobutton_size = get_theme_mod('tesseract_woocommerce_button_size'); ?>

		<?php $woobutclass = ''; ?>

			<?php if($woobutton_size == 'small' ) { 

				$woobutclass = 'woobutton-small';

			} elseif ($woobutton_size == 'large' ) { 

				$woobutclass = 'woobutton-large'; 

			} else {

				$woobutclass = 'woobutton-medium';

			}

			$tesseract_woocommerce_button_text_color = (get_theme_mod('tesseract_woocommerce_button_text_color')) ? get_theme_mod('tesseract_woocommerce_button_text_color') : '#ffffff';

			 ?>

		

		<button style="color: <?php echo $tesseract_woocommerce_button_text_color; ?>; background-color: <?php echo $woobutton_bgcolor; ?>; border-radius: <?php echo $woobutton_brderradius; ?>px;" type="submit" class="<?php echo $woobutclass; ?> single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>



		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>



	<?php endif; ?>

</form>



<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

