<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
//echo "<pre>"; print_r($product); echo "</pre>";
//die;
// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );
	?>
	<div class="shop_descrip">
	<?php $wootitle_size = get_theme_mod('tesseract_woocommerce_title_size'); 
							switch ( $wootitle_size ) {
								case 'small':
									$wootitle_classsize = 'wootitle-small';

									break;
								case 'large':
									$wootitle_classsize = 'wootitle-large';

									break;
								default:
									$wootitle_classsize = 'wootitle-medium';
							}
	?>
	<?php $wootitle_underline = get_theme_mod('tesseract_woocommerce_title_underline'); 
							switch ( $wootitle_underline ) {
								case 'underline':
									$wootitle_classunderline = 'wootitle-underline';

									break;
								default:
									$wootitle_classunderline = 'wootitle-notunderline';
							}
	?>
	
	
	<div id="prodlist_title" class="<?php echo $wootitle_classsize; ?> <?php echo $wootitle_classunderline; ?>">
	<a href ="<?php echo get_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
	</div>
	<?php
	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	 ?>
	 <?php $wooprice = get_theme_mod('tesseract_woocommerce_price_size'); ?>
	 <?php $woopriceweight = get_theme_mod('tesseract_woocommerce_price_weight');
	    switch ( $woopriceweight ) {
			case 'bold':
				$wooprice_classbold = 'wooprice-bold';

			break;
			default:
				$wooprice_classbold = 'wooprice-nonbold';
		}
	 ?>
	<?php	$prodregprice = get_post_meta( $product->get_id(), '_regular_price', true);	$prodsalesprice = get_post_meta( $product->get_id(), '_sale_price', true);	?>
	 <div style="font-size: <?php echo $wooprice; ?>px;" class="wooshop-price <?php echo $wooprice_classbold; ?>">
		<?php if( ($prodregprice != '') && ($prodsalesprice != '') ) { ?>		<span class="regular-price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo number_format($prodregprice,2); ?></span>		<?php } elseif( ($prodregprice != '') && ($prodsalesprice == '') ) { ?>		<span class="regular-pricenew"><?php echo get_woocommerce_currency_symbol(); ?><?php echo number_format($prodregprice,2); ?></span>		<?php } ?>		<?php if($prodsalesprice != '') { ?>		<span class="sales-price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo number_format($prodsalesprice,2); ?></span>			<?php } ?>
	 <?php //do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
	 </div>
    <?php
	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	?>
	<?php $wooshopratings = get_theme_mod('tesseract_woocommerce_shop_ratings'); ?>
	<?php if( $wooshopratings == 'showratings' ) { ?>
	<div class="product-rating">
	<?php //add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ); ?>
	<?php
	if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
    }
	global $product;
	if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
		return;
	}
	$rating_count = $product->get_rating_count();
	$review_count = $product->get_review_count();
	$average      = $product->get_average_rating(); ?>
	<?php //if ( $rating_count > 0 ) : ?>

		<div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
			<div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'woocommerce' ), $average ); ?>">
				<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
					<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'woocommerce' ), '<span itemprop="bestRating">', '</span>' ); ?>
					<?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'woocommerce' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
				</span>
			</div>
		</div>

	<?php //endif; ?>
	</div>
	<?php } else {
	}
	?>
	<?php
			$addtocart_pos_class = (get_theme_mod('tesseract_cart_button_position')) ? get_theme_mod('tesseract_cart_button_position') : 'left-woo-cart-btn';
		?>
	<div class="wooprod-button <?php echo  $addtocart_pos_class; ?>">
	<?php $wooaddbutton = (get_theme_mod('tesseract_woocommerce_product_morebutton')) ? get_theme_mod('tesseract_woocommerce_product_morebutton') : 'showcartbutton'; ?>
			<?php if($wooaddbutton == 'showcartbutton' ) { ?>
				<?php //do_action( 'woocommerce_after_shop_loop_item' ); ?>
				<?php $woobutton_bgcolor = (get_theme_mod('tesseract_woocommerce_buttonbgcolor')) ? get_theme_mod('tesseract_woocommerce_buttonbgcolor') : '#fffff'; ?>
				<?php $woobutton_brderradius = (get_theme_mod('tesseract_woocommerce_button_radius')) ? get_theme_mod('tesseract_woocommerce_button_radius') : ''; ?>
				<?php $woobutton_size = (get_theme_mod('tesseract_woocommerce_button_size')) ? get_theme_mod('tesseract_woocommerce_button_size') : 'woomedium'; ?>
				<?php $woobutclass = ''; ?>
				<?php if($woobutton_size == 'small' ) { 
					$woobutclass = 'woobutton-small';
				} elseif ($woobutton_size == 'large' ) { 
					$woobutclass = 'woobutton-large'; 
				} else {
					$woobutclass = 'woobutton-medium';
				} ?>
				<?php
				$tesseract_woocommerce_button_text_color = (get_theme_mod('tesseract_woocommerce_button_text_color')) ? get_theme_mod('tesseract_woocommerce_button_text_color') : '#ffffff';
				global $product;
				echo apply_filters( 'woocommerce_loop_add_to_cart_link',
					sprintf( '<a style="color: '.$tesseract_woocommerce_button_text_color.'; background-color: '.$woobutton_bgcolor.'; border-radius: '.$woobutton_brderradius.'px;" href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button '.$woobutclass.' %s product_type_%s">%s</a>',
						esc_url( $product->add_to_cart_url() ),
						esc_attr( $product->get_id() ),
						esc_attr( $product->get_sku() ),
						$product->is_purchasable() ? 'add_to_cart_button' : '',
						esc_attr( $product->get_type() ),
						esc_html( $product->add_to_cart_text() )
					),
				$product );
				?>
			<?php } elseif ($wooaddbutton == 'showmorebutton' ) { ?>
				<?php $woobutton_bgcolor = get_theme_mod('tesseract_woocommerce_buttonbgcolor'); ?>
				<a class="shop_moredetails" href ="<?php echo get_permalink(); ?>" style="background-color:<?php echo $woobutton_bgcolor; ?>">Show More Details</a>
		    <?php } elseif ($wooaddbutton == 'hidecartbutton' ) {	
			} ?>
	</div>		
			
	</div>
	<div class="oneColClear"></div>	
</li>
