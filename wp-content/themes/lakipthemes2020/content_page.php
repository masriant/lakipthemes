<h2 class="blog-post-title"><?php the_title(); ?></h2>
<p><small> <cite><i class="fa fa-calendar"></i> <?php the_time('j F Y'); ?> | <i class="fa fa-tags"></i>
      <?php the_tags(); ?></cite></small></p>
<hr>
<?php the_content(); ?>