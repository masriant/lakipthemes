<?php

/**

 * Simple product add to cart

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.

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



global $product;



if ( ! $product->is_purchasable() ) {

	return;

}



?>



<?php

	// Availability

	$availability      = $product->get_availability();

	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';



	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );

?>



<?php if ( $product->is_in_stock() ) : ?>



	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>



	<form class="cart" method="post" enctype='multipart/form-data'>

	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>



	 	<?php

	 		if ( ! $product->is_sold_individually() ) {

	 			woocommerce_quantity_input( array(

	 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),

	 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),

	 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )

	 			) );

	 		}

	 	?>

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

	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />



	 	<button style="color: <?php echo $tesseract_woocommerce_button_text_color; ?>; background-color: <?php echo $woobutton_bgcolor; ?>; border-radius: <?php echo $woobutton_brderradius; ?>px;" type="submit" class="<?php echo $woobutclass; ?> single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>



		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	</form>



	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>



<?php endif; ?>

