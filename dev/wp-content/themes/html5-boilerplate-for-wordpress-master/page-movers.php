<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Our Team
 */

get_header();

$currentTitle = get_the_title($post);
$currentTitleImg = str_replace(' ', '', $currentTitle);
$parent = $post->post_parent;
$parentTitle = get_the_title($post->post_parent);
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
	
if ($parentTitle=="About") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($parentTitle=="Program"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($parentTitle=="Partners"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($parentTitle=="Blog"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
}?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent pageMovers">
    	<div class="box clearfix">
    	
            <h1><?php the_title(); ?></h1>
            <ul class="movers clearfix">
                <?php
                $args = array(
                    'category__name' => 'Movers',
                    'post_type' => 'post',
                    'meta_key' => 'Mover_Order',  // order by Mover_Order custom field
                    'orderby' =>  'meta_value_num',
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
                        } ?>
                        <div class="moverRO">
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
                        </div><!--.moverRO-->
                    </a>
                    <article id="<?php echo $noSpaceName ?>" class="moverContent moverDesc">
                        <?php the_content(); ?>
                    </article><!--.moverContent-->
                </li><!--.indivMover-->
                <?php endforeach ?>
            </ul><!--movers-->
        </div><!--.box-->
        
    </section><!--.pageContent .pageMovers-->
    
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>