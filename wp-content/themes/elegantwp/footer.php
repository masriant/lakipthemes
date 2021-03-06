<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package ElegantWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#elegantwp-content-wrapper -->
</div><!--/#elegantwp-wrapper -->


<?php if ( !(elegantwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'elegantwp-footer-1' ) || is_active_sidebar( 'elegantwp-footer-2' ) || is_active_sidebar( 'elegantwp-footer-3' ) || is_active_sidebar( 'elegantwp-footer-4' ) ) : ?>
<div class='clearfix' id='elegantwp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='elegantwp-container clearfix'>

<div class='elegantwp-footer-block-1'>
<?php dynamic_sidebar( 'elegantwp-footer-1' ); ?>
</div>

<div class='elegantwp-footer-block-2'>
<?php dynamic_sidebar( 'elegantwp-footer-2' ); ?>
</div>

<div class='elegantwp-footer-block-3'>
<?php dynamic_sidebar( 'elegantwp-footer-3' ); ?>
</div>

<div class='elegantwp-footer-block-4'>
<?php dynamic_sidebar( 'elegantwp-footer-4' ); ?>
</div>

</div>
</div><!--/#elegantwp-footer-blocks-->
<?php endif; ?>
<?php } ?>


<div class='clearfix' id='elegantwp-footer'>
<div class='elegantwp-foot-wrap elegantwp-container'>
<?php if ( elegantwp_get_option('footer_text') ) : ?>
  <p class='elegantwp-copyright'><?php echo esc_html(elegantwp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='elegantwp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'elegantwp' ), esc_html(date_i18n(__('Y','elegantwp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='elegantwp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'elegantwp' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#elegantwp-footer -->

</div>
</div>

<button class="elegantwp-scroll-top" title="<?php esc_attr_e('Scroll to Top','elegantwp'); ?>"><span class="fa fa-arrow-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'elegantwp'); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>