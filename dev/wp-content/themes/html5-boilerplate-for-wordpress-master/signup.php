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
			echo "<section class=\"mtwHero\" style=\"background:url('$image_url[0]') no-repeat;\">";
		} else {
			echo "<section class=\"mtwHero\">";
		}?>
	        <div class="box">
            	<article class="heroContent">
					<?php the_content(); ?>
                    <div class="heroButtons clearfix">
                    	<a href="/partners" class="btnMTW">Sign Up Now</a>
                        <a href="/donate" class="btnDonate">or donate</a>
                    </div><!--.clearfix-->
                </article><!--.heroContent-->
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
                <?php
				$proof = get_post_custom_values('Social Proof');
				if(is_array($proof)):
					foreach ( $proof as $key=> $value ) {
					  echo $value;					
					}
				endif;
				?>
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