<?php get_header(); ?>
<div class="content">
<div class="text-yellow-400">
<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    
    <?php get_template_part("content", get_post_format()); ?>
      <?php
  endwhile;
endif; ?>
</div>
<div class="side">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
