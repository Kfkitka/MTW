<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Case Studies
 */

get_header();
?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent pageCases">
    	<div class="box clearfix">
    	
            <h1><?php the_title(); ?></h1>
            <ul class="cases clearfix">
                <?php
                $args = array(
                    'category__name' => 'Case_Studies',
                    'post_type' => 'post',
                    'meta_key' => 'Case_Order',
                    'orderby' =>  'meta_value_num',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'numberposts' => -1
                );
                $postslist = get_posts($args);
                
                foreach ($postslist as $post) :
                    setup_postdata($post);
                    $caseName = get_the_title();
                    $trans = array(" " => "", "." => "", "," => "");
                    $noSpaceName = strtr($caseName,$trans);
                ?>
                <li class="indivMover">
                    <a href="#<?php echo $noSpaceName ?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                            echo "<img src=\"$image_url[0]\" alt=\"$caseName\" class=\"imgCase\" />";
                        } else{ ?>
                            <img src="/wp-content/images/shim.gif" class="imgPlaceholder" />
                        <?php } ?>
                        <div class="moverRO">
                            <div class="spacerRO">
                                <h3><?php the_title(); ?></h3>
                            </div><!--.spacerRO-->
                        </div><!--.moverRO-->
                    </a>
                    <article id="<?php echo $noSpaceName ?>" class="moverContent moverDesc">
                        <?php the_content(); ?>
                    </article><!--.moverContent-->
                </li><!--.indivMover-->
                <?php endforeach ?>
            </ul><!--cases-->
        </div><!--.box-->
        
    </section><!--.pageContent .pageMovers-->
    
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>