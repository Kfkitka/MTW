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
                <section id="educator" class="program">

                    <div id="val1" class="progVal val1">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Self-Capacity Building</h3>
                            </div>
                        </article><!--.hdrProgVal-->

                        <section id="educator1" class="programSection">
                            <div class="box">
                                <h3>Learn skills for yourself to manage stress, develop emotional resiliency.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <section class="progQuestions">
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #1?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #1 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #2?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #2 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #3?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #3 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                </section><!--.progQuestions-->

                            </div><!--.box-->
                        </section><!--#educator1-->
                    </div><!--.progVal-->

                    <div id="val2" class="progVal val2">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Community Application</h3>
                                <p>addressing the empathy action gap</p>
                            </div><!--.box-->
                        </article><!--.hdrProgVal-->

                        <section id="educator2" class="programSection">
                            <div class="box">
                                <h3>Build a community with your educators and share best practices.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <div class="progImages">
                                    <img class="imgSingle" src="http://placehold.it/16x9"/>
                                </div><!--.progImages-->
                            </div><!--.box-->
                        </section>

                        <section id="educator3" class="programSection">
                            <div class="box">
                                <h3>Form Transformation Team to brainstorm.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <section class="progQuestions">
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #1?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #1 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #2?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #2 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #3?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #3 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                </section><!--.progQuestions-->
                            </div><!--.box-->
                        </section>
                    </div><!--.progVal-->

                    <div id="val3" class="progVal val3">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Application</h3>
                                <p>addressing the empathy action gap</p>
                            </div><!--.box-->
                        </article><!--.hdrProgVal-->

                        <section id="educator4" class="programSection">
                            <div class="box">
                                <h3>Develop a personalized action plan.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <section class="progExamples">
                                    <a href="#" class="example box">
                                        <p>This is example title #1</p>
                                        <article class="exampleContent">
                                            <p>Here is a short description on why example #1 is important. More words on why it’s important.</p>
                                        </article><!--.example-->
                                    </a>
                                    <a href="#" class="example box">
                                        <p>This is example title #2</p>
                                        <article class="exampleContent">
                                            <p>Here is a short description on why example #2 is important. More words on why it’s important.</p>
                                        </article><!--.example-->
                                    </a>
                                    <a href="#" class="example box">
                                        <p>This is example title #3</p>
                                        <article class="exampleContent">
                                            <p>Here is a short description on why example #3 is important. More words on why it’s important.</p>
                                        </article><!--.example-->
                                    </a>
                                </section><!--.progQuestions-->
                            </div><!--.box-->
                        </section>

                        <section id="educator5" class="programSection">
                            <div class="box">
                                <h3>Utilize MTW tools in your classroom with the help of our Online Hub to refresh concepts.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <div class="vidBox">
                                    <img class="imgVidBox" src="http://placehold.it/16x9"/>
                                    <iframe src="http://www.youtube.com/embed/lrjz_lMNQqA?showinfo=0" allowfullscreen></iframe>
                                </div><!--.vidBox-->
                            </div><!--.box-->
                        </section><!--#educator5-->
                    </div><!--.progVal-->

                    <div id="val4" class="progVal val4">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Network Mobilization</h3>
                                <p>sustained networking through application, Global Summit</p>
                            </div><!--.box-->
                        </article><!--.hdrProgVal-->

                        <section id="educator6" class="programSection">
                            <div class="box">
                                <h3>Results — increase in self-confidence, ability to manage conflict, increased classroom management.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <div class="progImages progImgGrid clearfix">
                                    <img src="http://placehold.it/16x9"/>
                                    <img src="http://placehold.it/16x9"/>
                                    <img src="http://placehold.it/16x9"/>
                                    <img src="http://placehold.it/16x9"/>
                                </div><!--.progImages-->
                            </div><!--.box-->
                        </section><!--#educator6-->
                    </div><!--.progVal-->

                </section><!--#educator-->

                 <section id="company" class="program">

                    <div id="val1" class="progVal val1">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Self-Capacity Building</h3>
                            </div>
                        </article><!--.hdrProgVal-->

                        <section id="company1" class="programSection">
                            <div class="box">
                                <h3>Learn skills for yourself to manage stress, develop emotional resiliency.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <section class="progQuestions">
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #1?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #1 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #2?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #2 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #3?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #3 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                </section><!--.progQuestions-->

                            </div><!--.box-->
                        </section><!--#company1-->
                    </div><!--.progVal-->

                    <div id="val2" class="progVal val2">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Community Application</h3>
                                <p>addressing the empathy action gap</p>
                            </div><!--.box-->
                        </article><!--.hdrProgVal-->

                        <section id="company2" class="programSection">
                            <div class="box">
                                <h3>Build a community with your educators and share best practices.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <div class="progImages">
                                    <img class="imgSingle" src="http://placehold.it/16x9"/>
                                </div><!--.progImages-->
                            </div><!--.box-->
                        </section>

                        <section id="company3" class="programSection">
                            <div class="box">
                                <h3>Form Transformation Team to brainstorm.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <section class="progQuestions">
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #1?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #1 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #2?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #2 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                    <div class="question">
                                        <article class="questionContent box">
                                            <p>This is sample question #3?</p>
                                            <div class="questionRO box">
                                                <p>Here is a short description on why question #3 is important. More words on why it’s important.</p>
                                            </div>
                                        </article><!--.question-->
                                    </div>
                                </section><!--.progQuestions-->
                            </div><!--.box-->
                        </section>
                    </div><!--.progVal-->

                    <div id="val3" class="progVal val3">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Application</h3>
                                <p>addressing the empathy action gap</p>
                            </div><!--.box-->
                        </article><!--.hdrProgVal-->

                        <section id="company4" class="programSection">
                            <div class="box">
                                <h3>Develop a personalized action plan.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <section class="progExamples">
                                    <a href="#" class="example box">
                                        <p>This is example title #1</p>
                                        <article class="exampleContent">
                                            <p>Here is a short description on why example #1 is important. More words on why it’s important.</p>
                                        </article><!--.example-->
                                    </a>
                                    <a href="#" class="example box">
                                        <p>This is example title #2</p>
                                        <article class="exampleContent">
                                            <p>Here is a short description on why example #2 is important. More words on why it’s important.</p>
                                        </article><!--.example-->
                                    </a>
                                    <a href="#" class="example box">
                                        <p>This is example title #3</p>
                                        <article class="exampleContent">
                                            <p>Here is a short description on why example #3 is important. More words on why it’s important.</p>
                                        </article><!--.example-->
                                    </a>
                                </section><!--.progQuestions-->
                            </div><!--.box-->
                        </section>

                        <section id="company5" class="programSection">
                            <div class="box">
                                <h3>Utilize MTW tools in your classroom with the help of our Online Hub to refresh concepts.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <div class="vidBox">
                                    <img class="imgVidBox" src="http://placehold.it/16x9"/>
                                    <iframe src="http://www.youtube.com/embed/lrjz_lMNQqA?showinfo=0" allowfullscreen></iframe>
                                </div><!--.vidBox-->
                            </div><!--.box-->
                        </section><!--#company5-->
                    </div><!--.progVal-->

                    <div id="val4" class="progVal val4">
                        <article class="hdrProgVal">
                            <div class="box">
                                <h3>Network Mobilization</h3>
                                <p>sustained networking through application, Global Summit</p>
                            </div><!--.box-->
                        </article><!--.hdrProgVal-->

                        <section id="company6" class="programSection">
                            <div class="box">
                                <h3>Results — increase in self-confidence, ability to manage conflict, increased classroom management.</h3>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <div class="progImages progImgGrid clearfix">
                                    <img src="http://placehold.it/16x9"/>
                                    <img src="http://placehold.it/16x9"/>
                                    <img src="http://placehold.it/16x9"/>
                                    <img src="http://placehold.it/16x9"/>
                                </div><!--.progImages-->
                            </div><!--.box-->
                        </section><!--#company6-->
                    </div><!--.progVal-->

                </section><!--#company-->

                <a href="/partners" class="btnProgSignUp">Sign Up Now</a>
                
                <?php /*<section id="educator" class="program">
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
                </section><!--#company--> */ ?>
            </div><!--.programContent-->

        </section><!--.pageContent-->
        
     </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>