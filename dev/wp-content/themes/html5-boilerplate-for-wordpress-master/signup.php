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

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      	<?php
		if ( has_post_thumbnail() ) {
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			echo "<section class=\"signupHero\" style=\"background:url('$image_url[0]') no-repeat;\">";
		} else {
			echo "<section class=\"signupHero\">";
		}?>
	        <div class="box">
	        	<article class="signupWrapper clearfix">
	            	<div class="signupBox">
						<div class="signupForm">
						</div>
	                    <div class="formButton clearfix">
	                    	<a href="/partners" class="blueSignupBtn">Become a Partner</a>
	                    </div><!--.clearfix-->
	                </div>
	                <div class="signupHeader">
	                	<p class="signupTitle">
	                		Pose a question that frames why they should sign up.
	                	</p>
	                	<p class="signupSubtitle">
							Sentence telling them to sign up.
	                	</p>
	                </div>
	            </article>
            </div>
        </section><!--.mtwHero-->
        
        <section class="howWorks">
        	<div class="box clearfix">
          		<h3 class="hdrWorks">How it Works:</h3>
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
                	<article class="socialContent">
                    	<?php the_content(); ?>
                    </article>
                <?php endforeach; ?>
				<div class="greenSignupBtn">
                	<a href="/partners" class="bigBtn">Join the Movement</a>
                </div>
            </div>
        </article><!--.socialSection-->
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>