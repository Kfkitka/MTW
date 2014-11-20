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
                <aside class="programNav">
                    <div class="progNavContent">
                        <a href="1" class="box progVal1">
                            <h3>Self-Capacity Building</h3>
                        </a><!--.progVal1-->
                        <a href="2" class="box progVal2">
                            <h3>Community Application<span>addressing the empathy action gap</span></h3>
                        </a><!--.progVal2-->
                        <a href="4" class="box progVal3">
                            <h3>Application<span>addressing the empathy action gap</span></h3>
                        </a><!--.progVal3-->
                        <a href="6" class="box progVal4">
                            <h3>Network Mobilization<span>sustained networking through application, Global Summit</span></h3>
                        </a><!--.progVal4-->
                    </div><!--.progNavContent-->
                </aside><!--.programNav-->
                
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
                    <section id="educator<?php echo $order ?>" class="box programSection<?php echo $order ?> clearfix">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <?php
                        if(has_category('type-1')){
                            $progQuest = get_post_custom_values('Question');
                            $progAns = get_post_custom_values('Answer');
                            if(is_array($progQuest)):
                                $i = 1;
                                foreach ( $progQuest as $key=> $value ) {
                                    ${'question'.$i} = $value;
                                    $i++;
                                }
                            endif;
                            if(is_array($progAns)):
                                $i = 1;
                                foreach ( $progAns as $key=> $value ) {
                                    ${'answer'.$i} = $value;
                                    $i++;
                                }
                            endif;
                        ?>
                        <section class="progQuestions clearfix">
                            <article class="question">
                                <div class="box">
                                    <p><?php echo $question1 ?></p>
                                    <div class="questionRO">
                                        <p><?php echo $answer1 ?></p>
                                    </div>
                                </div>
                            </article><!--.question-->
                            <article class="question">
                                <div class="box">
                                    <p><?php echo $question2 ?></p>
                                    <div class="questionRO">
                                        <p><?php echo $answer2 ?></p>
                                    </div>
                                </div>
                            </article><!--.question-->
                            <article class="question">
                                <div class="box">
                                    <p><?php echo $question3 ?></p>
                                    <div class="questionRO">
                                        <p><?php echo $answer3 ?></p>
                                    </div>
                                </div>
                            </article><!--.question-->
                        </section><!--.progQuestions-->
                        <?php } elseif(has_category('type-2')){
                            echo 'program type 2';
                        } elseif(has_category('type-3')){
                            echo 'program type 3';
                        } elseif(has_category('type-4')){ //video version
                            $vidCode = get_post_custom_values('Video');
                            if(is_array($vidCode)):
                                foreach ( $vidCode as $key=> $value ) {
                                    $video = $value;
                                }
                            endif;
                        ?>
                        <div class="vidBox">
                            <img class="imgVidBox" src="http://placehold.it/16x9"/>
                            <iframe src="//www.youtube.com/embed/<?php echo $video; ?>?showinfo=0" allowfullscreen></iframe>
                        </div><!--.vidBox-->
                        <?php } ?>
                    </section><!--.programSection-->
                    <?php endforeach ?>

                    <a href="/partners" class="btnProgSignUp">Sign Up Now</a>
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
                    <section id="company<?php echo $order ?>" class="box programSection<?php echo $order ?> clearfix">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </section><!--.programSection-->
                    <?php endforeach ?>

                    <a href="/partners" class="btnProgSignUp">Sign Up Now</a>
                </section><!--#company-->
            </div><!--.programContent-->

        </section><!--.pageContent-->
        
     </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>