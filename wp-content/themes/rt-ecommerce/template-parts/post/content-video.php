<?php
/**
 * The template part for displaying slider
 *
 * @package RT Ecommerce 
 * @subpackage rt_ecommerce
 * @since RT Ecommerce 1.0
 */
?>

<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  	<div class="row outer_post">
      	<div class="post_thumb col-md-5">            	
			<?php
				if ( ! is_single() ) {

					// If not a single post, highlight the video file.
					if ( ! empty( $video ) ) {
						foreach ( $video as $video_html ) {
							echo '<div class="entry-video">';
								echo $video_html;
							echo '</div>';
						}
					};

				}; 
			?>
      	</div>
      	<div class="new-text col-md-7">
          	<div class="post_content">
              	<h4><?php the_title();?></h4>
              	<div class="metabox">
                  	<span class="entry-date"><?php the_date(); ?></span>
                  	<span class="entry-author"><?php the_author(); ?></span>
                  	<span class="entry-comments"> <?php comments_number( __('no responses','rt-ecommerce'), __('one response','rt-ecommerce'), __('% responses','rt-ecommerce') ); ?> </span>
             	</div>
              	<hr class="big">
              	<hr class="small">
              	<p><?php the_excerpt(); ?></p>
              	<a href="<?php echo esc_url( get_permalink() );?>" class="btn_read_moreht" title="<?php esc_attr_e( 'Read More', 'rt-ecommerce' ); ?>"><?php esc_html_e('Read More','rt-ecommerce'); ?></a>
          	</div>
      	</div>
      	<div class="clearfix"></div> 
 	</div>
</article>