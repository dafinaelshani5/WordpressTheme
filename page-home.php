<?php get_header(); ?>
<div class="content">
    <div class="not-side">

    <div>
        <?php
        $args = [
          "type" => "post",
          "post_per_page" => 1,
          "category__in" => [8],
        ];
        $lastBlog = new WP_Query($args);
        if ($lastBlog->have_posts()):
          while ($lastBlog->have_posts()):
            $lastBlog->the_post(); ?>
    
    <?php get_template_part("content", "featured"); ?>
      <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
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
