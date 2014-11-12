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
	
if ($parentTitle=="about") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($parentTitle=="program"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($parentTitle=="partners"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($parentTitle=="blog"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
}?>

<div id="main" class="mtwWrapper mtwPage clearfix" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      	<?php /*<article class="subTitleBar">
			<?php
			// if there is a gparent, display the link
			if($grandparent != 0){
				echo '<a href="'.get_permalink($grandparent).'" class="gparentLink">'.get_the_title($grandparent).'</a> &raquo;';
			}
            // if there is a parent, display the link
			if($parentTitle != "Index"){
				echo '<a href="'.get_permalink($parent).'" class="parentLink">'.get_the_title($parent).'</a> &raquo;';
			}
			// current link
			?>
			<a href='<?php the_permalink() ?>' class="currentLink"><?php the_title(); ?></a> &raquo;
        </article>
        <article class="hdrPageImg"><img src="<?php echo $homePage ?>wp-content/images/<?php echo $subUrl ?>/hdr<?php echo $currentTitleImg ?>.jpg" alt="page header" /></article>*/ ?>
        <?php get_sidebar(); ?>
        <section class="pageContent floatLeft">
        	<?php the_content(); ?>
        </section>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>