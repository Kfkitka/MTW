<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Program
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

<div id="main" class="mtwWrapper mtwProgram" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <section class="pageContent"> 
            <section class="progIntro">
            	<div class="box">
                	<h3>Are you &hellip;</h3>
                    <section class="progChoices clearfix">
                    	<a href="#educator" class="btnProgEducator">An Educator</a>
                        <a href="#company" class="btnProgCompany">Part of a Company</a>
                    </section><!--.progChoices-->
                </div><!--.box-->
            </section><!--.progIntro-->
            
            <div class="programContent clearfix">
                <article class="programNav">
                	<div class="progNavContent">
                        <a href="1"></a>
                        <a href="2"></a>
                        <a href="3"></a>
                        <a href="4"></a>
                        <a href="5"></a>
                        <a href="6"></a>
                    </div><!--.progNavContent-->
                </article><!--.programNav-->
                
                <section id="educator" class="program">
					<?php
                    $args1 = array(
                        'category_name' => 'Program+Educator',
                        'post_type' => 'post',
                        'meta_key' => 'Program_Order',  // order by Program_Order custom field
                        'orderby' =>  'meta_value_num',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => -1
                    );
                    $postslist1 = get_posts($args1);
                    foreach ($postslist1 as $post) :
                        setup_postdata($post);
                        $progOrder = get_post_custom_values('Program_Order');
                        if(is_array($progOrder)):
                            foreach ( $progOrder as $key=> $value ) {
                                $order = $value;
                            }
                        endif;
                    ?>
                    <section id="educator<?php echo $order ?>" class="programSection<?php echo $order ?> clearfix">
                    	<div class="box">
							<?php
                            if ( has_post_thumbnail() ) {
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                                //echo "<img src=\"$image_url[0]\" alt=\"$moverName\" />";
                            } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div><!--.box-->
                    </section><!--.programSection-->
                    <?php endforeach ?>
                </section><!--#educator-->
                
                <section id="company" class="program">
					<?php
                    $args2 = array(
                        'category_name' => 'Program+Company',
                        'post_type' => 'post',
                        'meta_key' => 'Program_Order',  // order by Program_Order custom field
                        'orderby' =>  'meta_value_num',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => -1
                    );
                    $postslist2 = get_posts($args2);
                    foreach ($postslist2 as $post) :
                        setup_postdata($post);
                        $progOrder = get_post_custom_values('Program_Order');
                        if(is_array($progOrder)):
                            foreach ( $progOrder as $key=> $value ) {
                                $order = $value;
                            }
                        endif;
                    ?>
                    <section id="company<?php echo $order ?>" class="programSection<?php echo $order ?> clearfix">
                    	<div class="box">
							<?php
                            if ( has_post_thumbnail() ) {
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                                //echo "<img src=\"$image_url[0]\" alt=\"$moverName\" />";
                            } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div><!--.box-->
                    </section><!--.programSection-->
                    <?php endforeach ?>
                </section><!--#company-->
                
                <aside class="programValues">
                    <section class="progVal progVal1">
                        <h3>Self-Capacity Building</h3>
                    </section><!--.progVal1-->
                    <section class="progVal progVal2">
                        <h3>Community Application<span>addressing the empathy action gap</span></h3>
                    </section><!--.progVal1-->
                    <section class="progVal progVal3">
                        <h3>Application<span>addressing the empathy action gap</span></h3>
                    </section><!--.progVal1-->
                    <section class="progVal progVal4">
                        <h3>Network Mobilization<span>sustained networking through application, Global Summit</span></h3>
                    </section><!--.progVal1-->
                </aside><!--.programValue-->
            </span><!--.programContent-->
            
        </section><!--.pageContent-->
        
     </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>