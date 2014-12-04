<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Blog Posts
 */

get_header(); ?>

<div id="main" class="mtwWrapper mtwPage" role="main">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <section class="pageContent">
    <div class="box clearfix">
      <h1><?php the_title(); ?></h1>

      <?php
      $args = array(
        'category_name' => 'blog,tips',
        'post_type' => 'post',
        'order' => 'ASC',
        'post_status' => 'publish',
        'numberposts' => -1
      );
      $postslist = get_posts($args);
      foreach ($postslist as $post) :
        setup_postdata($post);
      ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h3>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h3>
        <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </article>

      <?php endforeach ?>
      
      <nav class="blogNav clearfix">
        <div class="blogNewer">
          <?php previous_posts_link('&laquo; Newer Posts') ?>
        </div>
        <div class="blogOlder">
          <?php next_posts_link('Older Posts &raquo;') ?>
        </div>
      </nav><!--.blogNav-->

    </div><!--.box-->
  </section><!--.pageContent-->

  <?php endwhile; ?>
<?php endif; ?>
</div><!--#main-->

<?php get_footer(); ?>


