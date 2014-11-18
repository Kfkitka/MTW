<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Board Members
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

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <section class="pageContent pageMovers"> 
            <h1 class="pageTitle">Board Members</h1>
            <section class="boardMembers clearfix">
                <?php
                $args = array(
                    'category_name' => 'Board',
                    'post_type' => 'post',
                    'meta_key' => 'Board_Order',  // order by Board_Order custom field
                    'orderby' =>  'meta_value_num',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'numberposts' => -1
                );
                $postslist = get_posts($args);
                foreach ($postslist as $post) :
                    setup_postdata($post);
                    $moverName = get_the_title();
                    $trans = array(" " => "", "." => "", "ü" => "u", "&uuml;" => "u");
                    $noSpaceName = strtr($moverName,$trans);
                ?>
                <section id="<?php echo $noSpaceName ?>" class="boardMember clearfix">
                    <div class="imgBoard">
                        <?php
                        if ( has_post_thumbnail() ) {
                            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                            echo "<img src=\"$image_url[0]\" alt=\"$moverName\" />";
                        } ?>
                    </div><!--.imgBoard-->
                    <article class="boardContent">
                        <div class="box">
                            <h3><?php echo $moverName ?>
                                <span><?php
                                $moverTitle = get_post_custom_values('MTW_Title');
                                if(is_array($moverTitle)):
                                    foreach ( $moverTitle as $key=> $value ) {
                                        echo $value;					
                                    }
                                endif;
                                ?>
                            </h3>
                            <?php the_content(); ?>
                        </div><!--.box-->
                    </article><!--.boardContent-->
                </section><!--.boardMember-->
                <?php endforeach ?>
            </section><!--boardMembers-->
                
            <p class="pageTitle">Advisory Board Members</p>
            <section class="advisoryMembers clearfix">
                <?php
                $args = array(
                    'category_name' => 'Advisory',
                    'post_type' => 'post',
                    'meta_key' => 'Advisory_Order',  // order by Advisory_Order custom field
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
                <section id="<?php echo $noSpaceName ?>" class="boardMember clearfix">
                	<div class="imgBoard">
						<?php
                        if ( has_post_thumbnail() ) {
                            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                            echo "<img src=\"$image_url[0]\" alt=\"$moverName\" />";
                        } ?>
                    </div><!--.imgBoard-->
                    <article class="boardContent">
                    	<div class="box">
                            <h3><?php echo $moverName ?></h3>
                            <?php the_content(); ?>
                        
                        </div><!--.box-->
                    </article><!--.boardContent-->
                </section><!--.boardMember-->
                <?php endforeach ?>
            </section><!--advisoryBoard-->
            
        </section><!--.pageContent .pageMovers-->
        
     </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>