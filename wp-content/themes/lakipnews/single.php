<?php get_header(); ?>
<div class="col-md-8 blog-main">
  <div class="blog-post">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php __('No Post Found'); ?></p>
    <?php endif; ?>
  </div>
  <!-- End blog-post -->
</div>
<!-- End blog-main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>