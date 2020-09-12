<?php get_header(); ?>
<div class="col-md-8 blog-main">
  <div class="blog-post">
    <?php if (have_posts()) : ?>
    <h2>Kumpulan Artikel: <?php single_cat_title(); ?></h2>
    <?php while (have_posts()) : the_post(); ?>
    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-md-4">
        <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
            class="img-fluid rounded" /></a>
        <?php else : ?>
        <img src="<?php bloginfo('template_url'); ?>/images/no_image.png" class="img-fluid rounded" />
        <?php endif; ?>
      </div>
      <div class="col-md-8">
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>
        <?php the_excerpt(); ?>
        <small> <cite><?php the_time('j F Y'); ?> | Tags: <?php the_tags(); ?> | <a
              href="<?php the_permalink(); ?>">Selengkapnya..</a> </cite></small>
      </div>
    </div>
    <?php endwhile; ?>
    <?php
      if (function_exists('wp_bootstrap_pagination'))
        wp_bootstrap_pagination();
      ?>
    <?php else : ?>
    <p><?php __('No Post Found'); ?></p>
    <?php endif; ?>
  </div>
  <!--End blog-post-->
</div>
<!--End blog-main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>