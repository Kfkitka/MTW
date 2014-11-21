<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Subpage
 */

get_header();

$currentTitle = get_the_title($post);
$currentTitleImg = str_replace(' ', '', $currentTitle);
$parent = $post->post_parent;
$parentTitle = get_the_title($post->post_parent);
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
	
if ($parentTitle=="About") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($parentTitle=="Program"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($parentTitle=="Partners"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($parentTitle=="Blog"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
}?>

<div id="main" class="mtwWrapper mtwPage clearfix" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

	<?php get_sidebar(); ?>
    <section class="pageContent withSidebar">
      	<div class="box">
      		<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
        </div>
    </section><!--.pageContent-->

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>