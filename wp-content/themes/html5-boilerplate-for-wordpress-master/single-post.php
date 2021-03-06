<?php
//header("Status: 301 Moved Permanently");
//header("Location:http://blah.com");
//wp_redirect(get_option('home'));

get_header(); ?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <section class="pageContent">
        	<div class="box">
            	<h1><?php the_title(); ?></h1>
	        	  <?php the_content(); ?>
            </div><!--.box-->
        </section>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>