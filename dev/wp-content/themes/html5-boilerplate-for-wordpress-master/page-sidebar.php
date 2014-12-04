<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Subpage with Sidebar
 */

get_header();
?>

<div id="main" class="mtwWrapper mtwPage clearfix" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <?php get_sidebar(); ?>
    <section class="pageContent withSidebar">
        <div class="box">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div><!--.box-->
    </section><!--.pageContent-->

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>