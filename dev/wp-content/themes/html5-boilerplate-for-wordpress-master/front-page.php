<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Front Page
 */

get_header(); ?>

<div id="main" class="mtwWrapper homeContent" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      	<?php
		if ( has_post_thumbnail() ) {
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			echo "<section class=\"mtwHero\" style=\"background-image:url('$image_url[0]');\">";
		} else {
			echo "<section class=\"mtwHero\">";
		}?>
	        <div class="box">
            	<article class="heroContent">
            		<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
                    <div class="heroButtons clearfix">
                    	<a href="/program" class="btnMTW">Learn More</a>
                        <a href="https://donatenow.networkforgood.org/movethisworld" class="btnDonate" target="_blank">or donate</a>
                    </div><!--.clearfix-->
                </article><!--.heroContent-->
            </div>
        </section><!--.mtwHero-->
      
      	<article class="mtwMission">
	        <div class="box">
                <p><?php
				$mission = get_post_custom_values('Mission');
				if(is_array($mission)):
					foreach ( $mission as $key=> $value ) {
					  echo $value;					
					}
				endif;
				?></p>
            </div>
        </article><!--.mtwMission-->
        
        <section class="coreValues">
        	<div class="box clearfix">
          		<h3 class="hdrValues"><?php
          		$imgTitle = get_post_custom_values('Image_Title');
				if(is_array($imgTitle)):
					foreach ( $imgTitle as $key=> $value ) {
					  echo $value;					
					}
				endif;
				?></h3>

          		<div class="clearfix">
	                <?php $args = array(
						'category_name' => 'Values',
						'post_type' => 'post',
						'order' => 'ASC',
						'post_status' => 'publish',
						'numberposts' => 4
					);
					$postslist = get_posts($args);
					foreach ($postslist as $post) :
						setup_postdata($post);
					?>
	                <article class="value">
	                	<?php
	                    if ( has_post_thumbnail() ) {
	                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
							echo "<img src=\"$image_url[0]\" alt=\"value icon\" class=\"imgValue\" />";
	                    } else {
							echo "<div class=\"imgValue\"></div>";
						}?>
	                    <?php the_content(); ?>
	                </article>

	                <?php endforeach; ?>
                </div><!--.clearfix-->

                <a href="/program" class="btnMTW">Learn More</a>
        	</div><!--.box-->
        </section><!--.coreValues-->
        
        <section class="callOuts">
        	<div class="box clearfix">
            	<?php $args2 = array(
					'category_name' => 'Sign-Up',
					'post_type' => 'post',
					'order' => 'ASC',
					'post_status' => 'publish',
					'numberposts' => 1
				);
				$postslist2 = get_posts($args2);
				foreach ($postslist2 as $post) :
					setup_postdata($post);
				?>
                <?php
				if ( has_post_thumbnail() ) {
					$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
					echo "<article class=\"coSignUp callOutBox\" style=\"background:url('$image_url[0]') no-repeat;\">";
				} else {
					echo "<article class=\"coSignUp callOutBox\">";
				}?>
                	<article class="coContent">
                        <h3><?php the_title(); ?></h3>
                    	<?php the_content(); ?>
                        <a href="/program" class="btnCO">Learn More</a>
                    </article><!--.coContent-->
	            </article><!--.coSignUp-->
                <?php endforeach; ?>
                
                <?php $args3 = array(
					'category_name' => 'Challenge',
					'post_type' => 'post',
					'order' => 'ASC',
					'post_status' => 'publish',
					'numberposts' => 1
				);
				$postslist3 = get_posts($args3);
				foreach ($postslist3 as $post) :
					setup_postdata($post);
				?>
    	        <article class="coTips callOutBox">
                	<?php
                    if ( has_post_thumbnail() ) {
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
						echo "<img src=\"$image_url[0]\" alt=\"Tip of the Month featured image\" class=\"imgCOTip\" />";
						echo "<div class=\"tipContent hasImg\">";
                    } else {
						echo "<div class=\"tipContent\">";
					}?>
                        <article class="coContent">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <a href="/about#video" class="btnCO">Take the Challenge</a>
                        </article><!--.coContent-->
                    </div><!--.tipContent-->
	            </article><!--.coTips-->
                <?php endforeach; ?>
                
    	    </div><!--.box-->
        </section><!--.callOuts-->
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>