<?php get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
    <?php the_title('<h1 class="entry-title">', "</h1>"); ?>
    <?php if (has_post_thumbnail()): ?>
        <div><?php the_post_thumbnail("thumbnail"); ?></div>
    <?php endif; ?>
    <?php the_category(); ?>


<p><?php the_content(); ?></p>

<hr />

<?php
  endwhile;
endif; ?>

<?php get_footer(); ?>
