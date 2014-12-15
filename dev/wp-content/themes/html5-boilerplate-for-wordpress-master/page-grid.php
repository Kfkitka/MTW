<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Grid Style
 */

get_header();

?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent pageGrid clearfix">
    	
        <h1><?php the_title(); ?></h1>
        <ul class="gridList clearfix">
            <?php
            $currentTitle = get_the_title();
            if($currentTitle == 'Our Team'){
                $postType = 'Movers';
                $display = 'People_Order';
            }elseif($currentTitle = 'Case Studies'){
                $postType = 'Case_Studies';
                $display = 'Case_Order';
            }
            $args = array(
                'category__name' => $postType,
                'post_type' => 'post',
                'meta_key' => $display,
                'orderby' =>  'meta_value_num title',
                'order' => 'ASC',
                'post_status' => 'publish',
                'numberposts' => -1
            );
            $postslist = get_posts($args);
            
            foreach ($postslist as $post) :
                setup_postdata($post);
                $moverName = get_the_title();
                $trans = array(" " => "", "." => "", "ü" => "u", "&uuml;" => "u", "," => "");
                $noSpaceName = strtr($moverName,$trans);
            ?>
            <li class="indivMover">
                <a href="#<?php echo $noSpaceName ?>">
                    <?php
                    if ( has_post_thumbnail() ) {
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                        echo "<img src=\"$image_url[0]\" alt=\"$moverName\" class=\"imgMover\" />";
                    } else{ ?>
                        <img src="/wp-content/images/shim.gif" class="imgPlaceholder" />
                    <?php } ?>
                    <div class="moverRO">
                        <div class="spacerRO">
                            <h3>
                                <?php the_title(); ?>
                                <span><?php
                                $moverTitle = get_post_custom_values('MTW_Title');
                                if(is_array($moverTitle)):
                                    foreach ( $moverTitle as $key=> $value ) {
                                      echo $value;					
                                    }
                                endif;
                                ?></span>
                            </h3>
                        </div><!--.spacerRO-->
                    </div><!--.moverRO-->
                </a>
                <article id="<?php echo $noSpaceName ?>" class="moverDesc">
                    <div class="box">
                        <?php the_content(); ?>
                    </div><!--.box-->
                </article><!--.moverDesc-->
            </li><!--.indivMover-->
            <?php endforeach ?>
        </ul><!--movers-->
        
    </section><!--.pageContent .pageMovers-->
    
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>