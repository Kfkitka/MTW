<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Signup Page
 */

get_header(); ?>

<div id="main" class="mtwWrapper signupContent" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

  	<section class="pageContent">
      	<?php
		if ( has_post_thumbnail() ) {
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			echo "<section class=\"signupHero\" style=\"background:url('$image_url[0]') no-repeat;\">";
		} else {
			echo "<section class=\"signupHero\">";
		}?>
	        <div class="box">
	        	<article id="signup" class="clearfix">
	                <div class="signupBox">
						<div class="signupForm">
							<?php the_content(); ?>
						</div>
	                    <!--.clearfix-->
	                </div>
	                <div class="signupHeader">
	                    <?php $args2 = array(
								'category_name' => 'Partners',
								'category__not_in' => array(10,11),
								'post_type' => 'post',
								'order' => 'ASC',
								'post_status' => 'publish',
								'numberposts' => 1
							);
							$postslist2 = get_posts($args2);
							foreach ($postslist2 as $post) :
								setup_postdata($post);
							?>
								<h3><?php the_title(); ?></h3>
			                    <?php the_content(); ?>
			                <?php endforeach; ?>
	                </div>
	            </article>
            </div>
        </section><!--.mtwHero-->
        
        <section class="howWorks">
        	<div class="box clearfix">
          		<h3 class="hdrWorks">How It Works</h3>
                <?php $args = array(
					'category_name' => 'how-it-works',
					'post_type' => 'post',
					'order' => 'ASC',
					'post_status' => 'publish',
					'numberposts' => 4
				);
				$postslist = get_posts($args);
				foreach ($postslist as $post) :
					setup_postdata($post);
				?>
                <article class="workEx">
                	<?php
                    if ( has_post_thumbnail() ) {
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
						echo "<img src=\"$image_url[0]\" alt=\"how it works icon\" class=\"imgWorks\" />";
                    } else {
						echo "<div class=\"imgWorks\"></div>";
					}?>
					<h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </article>
                <?php endforeach; ?>
        	</div><!--.box-->
        </section><!--.coreValues-->

        <article class="socialSection">
	        <div class="box">
                <?php $args3 = array(
					'category_name' => 'social-proof',
					'post_type' => 'post',
					'order' => 'ASC',
					'post_status' => 'publish',
					'numberposts' => 1
				);
				$postslist3 = get_posts($args3);
				foreach ($postslist3 as $post) :
					setup_postdata($post);
				?>
            		<h3><?php the_title(); ?></h3>
                	<?php the_content(); ?>
                	<a href="#signup" class="bigBtn">Join the Movement</a>
                <?php endforeach; ?>
            </div>
        </article><!--.socialSection-->
    </section><!--.pageContent-->

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>