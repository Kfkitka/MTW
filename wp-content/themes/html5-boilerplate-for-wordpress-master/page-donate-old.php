<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Donate - Old
 */

get_header(); ?>

<div id="main" class="mtwWrapper signupContent" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

  	<section class="pageContent">
      	<?php
		if ( has_post_thumbnail() ) {
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			echo "<section class=\"donateHero signupHero\" style=\"background-image:url('$image_url[0]')\">";
		} else {
			echo "<section class=\"donateHero signupHero\">";
		}?>
	        <div class="box" style="height: 600px;">
	        	<article id="signup" class="clearfix">
	                <div class="donateBox">
						<div class="donateForm">
							<?php the_content(); ?>
						</div>
	                    <!--.clearfix-->
	                </div>
	            </article>
            </div>
       </section><!--.mtwHero-->

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>