<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Subpage No Sidebar
 */

get_header();

$permalink = get_permalink();
$homePage = home_url('/');
$subPage = substr($permalink, 29, 5);
	
if ($subPage=="about") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($subPage=="progr"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($subPage=="movem"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($subPage=="learn"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
} else if ($subPage=="join-"){
	$mainTitle = "Join Us";
	$subUrl = "join-us";
}?>

<div id="main" class="mtwWrapper mtwPage clearfix" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      	<article class="subTitleBar">
			<?php
			$currentTitle = get_the_title($post);
			$currentTitleImg = str_replace(' ', '', $currentTitle);
			$parent = $post->post_parent;
			$parentTitle = get_the_title($post->post_parent);
			$grandparent_get = get_post($parent);
			$grandparent = $grandparent_get->post_parent;
			// if there is a gparent, display the link
			if($grandparent != 0){
				echo '<a href="'.get_permalink($grandparent).'" class="gparentLink">'.get_the_title($grandparent).'</a> &raquo;';
			}
            // if there is a parent, display the link
			if($currentTitle != $mainTitle){
				echo '<a href="'.get_permalink($parent).'" class="parentLink">'.get_the_title($parent).'</a> &raquo;';
			}
			// current link
			?>
			<a href='<?php the_permalink() ?>' class="currentLink"><?php the_title(); ?></a> &raquo;
        </article>
        <article class="hdrPageImg"><img src="<?php echo $homePage ?>wp-content/images/<?php echo $subUrl ?>/hdr<?php echo $currentTitleImg ?>.jpg" alt="page header" /></article>
        <section class="pageContent noSidebar">
        	<?php the_content('Read the rest of this entry &raquo;'); ?>
        </section>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>