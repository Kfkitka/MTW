<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Front Page
 */

get_header(); ?>

<div id="main" class="mtwWrapper" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>