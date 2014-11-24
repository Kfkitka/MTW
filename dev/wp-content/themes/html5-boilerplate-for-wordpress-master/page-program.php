<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Program
 */

get_header();
?>

<div id="main" class="mtwWrapper mtwProgram" role="main">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent"> 
        <section class="progIntro">
        	<div class="box">
            	<h3>Are you interested in&hellip;</h3>
                <section class="progChoices clearfix">
                	<a href=".educator" class="btnProgEducator">Educator Leadership</a>
                    <a href=".company" class="btnProgCompany">Employee Wellness</a>
                </section><!--.progChoices-->
            </div><!--.box-->
        </section><!--.progIntro-->
            
        <div class="programContent clearfix">

            <div id="val1" class="progVal val1">
                <article class="hdrProgVal">
                    <div class="box">
                        <h3>Tap into your talents</h3>
                    </div>
                </article><!--.hdrProgVal-->

                <section id="section1" class="programSection">
                    <div class="box">
                    <?php
                    $args1 = array(
                        'category_name' => 'Program-1',
                        'category__not_in' => 'Questions',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => 2
                    );
                    $postslist1 = get_posts($args1);
                    foreach ($postslist1 as $post) :
                        setup_postdata($post);

                        if(has_category('Educator')){
                            $type = "educator";
                        }elseif(has_category('Company')){
                            $type = "company";
                        }
                    ?>
                        <section class="<?php echo $type; ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </section>
                    <?php endforeach ?>

                        <section class="progQuestions">
                            <div class="educator">
                            <?php
                            $args2a = array(
                                'category_name' => 'Questions+Program-1+Educator',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist2a = get_posts($args2a);
                            foreach ($postslist2a as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <div class="questionRO box">
                                            <?php the_content(); ?>
                                        </div>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </div><!--.educator-->

                            <div class="company">
                            <?php
                            $args2b = array(
                                'category_name' => 'Questions+Program-1+Company',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist2b = get_posts($args2b);
                            foreach ($postslist2b as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <div class="questionRO box">
                                            <?php the_content(); ?>
                                        </div>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </div><!--.company-->
                        </section><!--.progQuestions-->

                    </div><!--.box-->
                </section><!--#section1-->
            </div><!--.progVal-->

            <div id="val2" class="progVal val2">
                <article class="hdrProgVal">
                    <div class="box">
                        <h3 class="educator">Strengthen your community</h3>
                        <h3 class="company">Strengthen your company</h3>
                    </div><!--.box-->
                </article><!--.hdrProgVal-->

                <section id="section2" class="programSection">
                    <div class="box">
                    <?php
                    $args3 = array(
                        'category_name' => 'Program-2',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => 2
                    );
                    $postslist3 = get_posts($args3);
                    foreach ($postslist3 as $post) :
                        setup_postdata($post);

                        if(has_category('Educator')){
                            $type = "educator";
                        }elseif(has_category('Company')){
                            $type = "company";
                        }
                    ?>
                        <section class="<?php echo $type; ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                            <div class="progImages">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                    echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                } ?>
                            </div><!--.progImages-->
                        </section>
                    <?php endforeach ?>

                    </div><!--.box-->
                </section><!--#section2-->

                <section id="section3" class="programSection">
                    <div class="box">
                    <?php
                    $args4 = array(
                        'category_name' => 'Program-3',
                        'category__not_in' => 'Questions',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => 2
                    );
                    $postslist4 = get_posts($args4);
                    foreach ($postslist4 as $post) :
                        setup_postdata($post);

                        if(has_category('Educator')){
                            $type = "educator";
                        }elseif(has_category('Company')){
                            $type = "company";
                        }
                    ?>
                        <section class="<?php echo $type; ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </section>
                    <?php endforeach ?>

                        <section class="progQuestions">
                            <div class="educator">
                            <?php
                            $args5a = array(
                                'category_name' => 'Questions+Program-3+Educator',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist5a = get_posts($args5a);
                            foreach ($postslist5a as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <div class="questionRO box">
                                            <?php the_content(); ?>
                                        </div>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </div><!--.educator-->

                            <div class="company">
                            <?php
                            $args5b = array(
                                'category_name' => 'Questions+Program-5+Company',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist5b = get_posts($args5b);
                            foreach ($postslist5b as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <div class="questionRO box">
                                            <?php the_content(); ?>
                                        </div>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </div><!--.company-->
                        </section><!--.progQuestions-->

                    </div><!--.box-->
                </section><!--#section3-->
            </div><!--.progVal-->

            <div id="val3" class="progVal val3">
                <article class="hdrProgVal">
                    <div class="box">
                        <h3>Apply the toolbox of strategies everyday</h3>
                    </div><!--.box-->
                </article><!--.hdrProgVal-->

                <section id="section4" class="programSection">
                    <div class="box">
                    <?php
                    $args6 = array(
                        'category_name' => 'Program-4',
                        'category__not_in' => 'Questions',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => 2
                    );
                    $postslist6 = get_posts($args6);
                    foreach ($postslist6 as $post) :
                        setup_postdata($post);

                        if(has_category('Educator')){
                            $type = "educator";
                        }elseif(has_category('Company')){
                            $type = "company";
                        }
                    ?>
                        <section class="<?php echo $type; ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </section>
                    <?php endforeach ?>

                        <section class="progExamples">
                            <div class="educator">
                            <?php
                            $args7a = array(
                                'category_name' => 'Questions+Program-4+Educator',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist7a = get_posts($args7a);
                            foreach ($postslist7a as $post) :
                                setup_postdata($post);
                            ?>
                                <a href="#" class="example box <?php echo $type; ?>">
                                    <p><?php the_title(); ?></p>
                                    <article class="exampleContent">
                                        <?php the_content(); ?>
                                    </article><!--.example-->
                                </a>
                            <?php endforeach ?>
                            </div><!--.educator-->

                            <div class="company">
                            <?php
                            $args7b = array(
                                'category_name' => 'Questions+Program-4+Company',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist7b = get_posts($args7b);
                            foreach ($postslist7b as $post) :
                                setup_postdata($post);
                            ?>
                                <a href="#" class="example box <?php echo $type; ?>">
                                    <p><?php the_title(); ?></p>
                                    <article class="exampleContent">
                                        <?php the_content(); ?>
                                    </article><!--.example-->
                                </a>
                            <?php endforeach ?>
                            </div><!--.company-->
                        </section><!--.progExamples-->

                    </div><!--.box-->
                </section><!--#section4-->

                <section id="section5" class="programSection">
                    <div class="box">
                    <?php
                    $args8 = array(
                        'category_name' => 'Program-5',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => 2
                    );
                    $postslist8 = get_posts($args8);
                    foreach ($postslist8 as $post) :
                        setup_postdata($post);

                        if(has_category('Educator')){
                            $type = "educator";
                        }elseif(has_category('Company')){
                            $type = "company";
                        }

                        $vidCode = get_post_custom_values('Video');
                        if(is_array($vidCode)):
                            foreach ( $vidCode as $key=> $value ) {
                                $video = $value;
                            }
                        endif;
                    ?>
                        <section class="<?php echo $type; ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                            <div class="vidBox">
                                <img class="imgVidBox" src="http://placehold.it/16x9"/>
                                <iframe src="http://www.youtube.com/embed/<?php echo $video ?>?showinfo=0" allowfullscreen></iframe>
                            </div><!--.vidBox-->
                        </section>
                    <?php endforeach ?>
                    </div><!--.box-->
                </section><!--#section5-->
            </div><!--.progVal-->

            <div id="val4" class="progVal val4">
                <article class="hdrProgVal">
                    <div class="box">
                        <h3 class="educator">Join the global movement of educators</h3>
                        <h3 class="company">Join the global movement of change agents</h3>
                    </div><!--.box-->
                </article><!--.hdrProgVal-->

                <section id="section6" class="programSection">
                    <div class="box">
                    <?php
                    $args9 = array(
                        'category_name' => 'Program-6',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'numberposts' => 2
                    );
                    $postslist9 = get_posts($args9);
                    foreach ($postslist9 as $post) :
                        setup_postdata($post);

                        if(has_category('Educator')){
                            $type = "educator";
                        }elseif(has_category('Company')){
                            $type = "company";
                        }
                    ?>
                        <section class="<?php echo $type; ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                            <div class="progImages progImgGrid clearfix">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                    echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                    echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                    echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                    echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                } ?>
                            </div><!--.progImages-->
                        </section>
                    <?php endforeach ?>

                    </div><!--.box-->
                </section><!--#section6-->
            </div><!--.progVal-->

            <div class="programSection progSignUp">
                <div class="box">
                <?php
                $args10 = array(
                    'category_name' => 'Program-7',
                    'post_type' => 'post',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'numberposts' => 2
                );
                $postslist10 = get_posts($args10);
                foreach ($postslist10 as $post) :
                    setup_postdata($post);

                    if(has_category('Educator')){
                        $type = "educator";
                    }elseif(has_category('Company')){
                        $type = "company";
                    }
                ?>
                    <section class="<?php echo $type; ?>">
                        <?php the_content(); ?>
                        <a href="/partners" class="btnProgSignUp"><?php the_title(); ?></a>
                    </section>

                <?php endforeach ?>
                </div><!--.box-->
            </div><!--.programSection-->
                
        </div><!--.programContent-->

    </section><!--.pageContent-->
        
    <?php endwhile; ?>
<?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>