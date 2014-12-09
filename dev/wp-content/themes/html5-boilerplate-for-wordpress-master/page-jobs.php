<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Careers
 */

get_header();

?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent pageGrid">
    	<div class="box clearfix">
    	
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <?php
            $args = array(
                'category_name' => 'Jobs',
                'post_type' => 'post',
                'orderby' =>  'title',
                'order' => 'ASC',
                'post_status' => 'publish',
                'numberposts' => -1
            );
            $postslist = get_posts($args);
                
            foreach ($postslist as $post) :
                setup_postdata($post);
                $jobName = get_the_title();
                $trans = array(" " => "", "." => "", "," => "");
                $noSpaceName = strtr($jobName,$trans);
            ?>

            <a href="<?php the_permalink(); ?>" id="<?php echo $noSpaceName; ?>" class="jobTitle"><?php the_title(); ?></a>

            <?php endforeach ?>

        </div><!--.box-->
        
    </section><!--.pageContent .pageMovers-->
    
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>