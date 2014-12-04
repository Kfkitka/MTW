<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header();
?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent">
     	<div class="box clearfix">
        <h1><?php the_title(); ?></h1>
		  	<?php the_content(); ?>
      </div><!--.box-->
    </section><!--.pageContent-->

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>