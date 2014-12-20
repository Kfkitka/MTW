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
        <article class="hdrProgram">
            <div class="box">
                <?php the_content(); ?>
            </div>
        </article><!--.hdrProgram-->

        <?php
        if ( has_post_thumbnail() ) {
            $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
            echo "<section class=\"progIntro\" style=\"background-image:url('$image_url[0]');\">";
        } else {
            echo "<section class=\"progIntro\">";
        }?>
            <div class="box">
                <h3>Are you interested in&hellip;</h3>
                <section class="progChoices clearfix">
                    <a href=".educator" class="btnProgEducator">School<br />Culture</a>
                    <a href=".company" class="btnProgCompany">Workplace Wellness</a>
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
                        <h3>Give yourself the gift of space and time to learn skills to handle anything life throws at you</h3>
                        <p>Take a step back to reflect on your own well-being and what you need to be your best through Move This World&rsquo;s interactive and dynamic curriculum.</p>

                        <section class="progQuestions clearfix">
                            <div class="educator">
                            <?php
                            $args1a = array(
                                'category_name' => 'Questions+Program-1+Educator',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist1a = get_posts($args1a);
                            foreach ($postslist1a as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                        ?>
                                            <div class="questionRO box" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
                                        <?php } else{ ?>
                                            <div class="questionRO box">
                                                <div class="innerRO">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </div><!--.educator-->

                            <div class="company">
                            <?php
                            $args1b = array(
                                'category_name' => 'Questions+Program-1+Company',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist1b = get_posts($args1b);
                            foreach ($postslist1b as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                        ?>
                                            <div class="questionRO box" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
                                        <?php } else{ ?>
                                            <div class="questionRO box">
                                                <div class="innerRO">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
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
                        <h3>Strengthen your <span class="educator">community</span><span class="company">company</span></h3>
                    </div><!--.box-->
                </article><!--.hdrProgVal-->

                <section id="section2" class="programSection">
                    <div class="box">
                        <section class="educator">
                            <h3>Collaborate and deliberate to define your community&rsquo;s ideal learning environment.</h3>
                            <p>Connect with your fellow teachers and school leaders and discover how you can empower each other to strengthen your classroom and school.</p>

                            <?php
                            $args2a = array(
                                'category_name' => 'Program-General+Educator',
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => 1
                            );
                            $postslist2a = get_posts($args2a);
                            foreach ($postslist2a as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="progImages">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                        echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                    } ?>
                                </div><!--.progImages-->
                            <?php endforeach ?>
                        </section><!--.educator-->

                        <section class="company">
                            <h3>Collaborate and deliberate to define your company&rsquo;s ideal environment</h3>
                            <p>Connect with your fellow colleagues and discover how you can empower each other to support productivity, wellness and empathetic leadership within your company.</p>

                            <?php
                            $args2b = array(
                                'category_name' => 'Program-General+Company',
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => 1
                            );
                            $postslist2b = get_posts($args2b);
                            foreach ($postslist2b as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="progImages">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                        echo "<img src=\"$image_url[0]\" alt=\"program image\" />";
                                    } ?>
                                </div><!--.progImages-->
                            <?php endforeach ?>
                        </section><!--.company-->
                    </div><!--.box-->
                </section><!--#section2-->

                <section id="section3" class="programSection">
                    <div class="box">
                        <section class="educator">
                            <h3>Lead your school with a Transformation Team</h3>
                            <p>With Move This World&rsquo;s support, you and your Transformation Team identify challenges and solutions you can implement to bring about positive change.</p>

                            <section class="progQuestions clearfix">
                            <?php
                            $args3a = array(
                                'category_name' => 'Questions+Program-3+Educator',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist3a = get_posts($args3a);
                            foreach ($postslist3a as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                        ?>
                                            <div class="questionRO box" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
                                        <?php } else{ ?>
                                            <div class="questionRO box">
                                                <div class="innerRO">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </section><!--.progQuestions-->
                        </section><!--.educator-->

                        <section class="company">
                            <h3>Lead your company with a Transformation Team</h3>
                            <p>With Move This World&rsquo;s support, you and your Transformation Team identify challenges and solutions you can implement to bring employee wellness to the forefront of your company culture.</p>

                            <section class="progQuestions clearfix">
                            <?php
                            $args3b = array(
                                'category_name' => 'Questions+Program-3+Company',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist3b = get_posts($args3b);
                            foreach ($postslist3b as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="question">
                                    <article class="questionContent box">
                                        <p><?php the_title(); ?></p>
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                                        ?>
                                            <div class="questionRO box" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
                                        <?php } else{ ?>
                                            <div class="questionRO box">
                                                <div class="innerRO">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </article>
                                </div><!--.question-->
                            <?php endforeach ?>
                            </section><!--.progQuestions-->
                        </section><!--.company-->

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
                        <h3>Transformation Team action plan</h3>
                        <p>Here is a sample action plan that we guide your Transformation Team to create.</p>

                        <section class="progExamples">
                            <div class="educator">
                            <?php
                            $args4a = array(
                                'category_name' => 'Questions+Program-4+Educator',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist4a = get_posts($args4a);
                            foreach ($postslist4a as $post) :
                                setup_postdata($post);
                            ?>
                                <a href="" class="example box">
                                    <p><?php the_title(); ?> &raquo;</p>
                                    <article class="exampleContent">
                                        <?php the_content(); ?>
                                    </article><!--.example-->
                                </a>
                            <?php endforeach ?>
                            </div><!--.educator-->

                            <div class="company">
                            <?php

                            $args4b = array(
                                'category_name' => 'Questions+Program-4+Company',
                                'post_type' => 'post',
                                'meta_key' => 'Question_Order',  // order by
                                'orderby' =>  'meta_value_num',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => -1
                            );
                            $postslist4b = get_posts($args4b);
                            foreach ($postslist4b as $post) :
                                setup_postdata($post);
                            ?>
                                <a href="" class="example box">
                                    <p><?php the_title(); ?> &raquo;</p>
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
                        <section class="educator">
                            <h3>Use Move This World&rsquo;s toolbox to sustain a safe and supportive school culture</h3>
                            <p>After the training, educators have access to many resources, including our Online Hub and consultation to trouble shoot any challenges you may encounter when enacting your action plan.</p>

                            <?php
                            $args5a = array(
                                'category_name' => 'Program-General+Educator',
                                'category__not_in' => 'Questions',
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => 1
                            );

                            $postslist5a = get_posts($args5a);
                            foreach ($postslist5a as $post) :
                                setup_postdata($post);

                                $vidCode = get_post_custom_values('Video');
                                if(is_array($vidCode)):
                                    foreach ( $vidCode as $key=> $value ) {
                                        $video = $value;
                                    }
                                endif;
                            ?>
                                <div class="vidBox">
                                    <img class="imgVidBox" src="http://placehold.it/16x9"/>
                                    <iframe src="//player.vimeo.com/video/<?php echo $video ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=00aee6" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div><!--.vidBox-->
                            <?php endforeach ?>
                        </section><!--.educator-->

                        <section class="company">
                            <h3>Use Move This World&rsquo;s toolbox to strengthen employee wellness and empathetic leadership</h3>
                            <p>After the training, you have access to many resources, including consultation from Move This World staff to trouble shoot any challenges you may encounter when carrying out your action plan.</p>

                            <?php
                            $args5b = array(
                                'category_name' => 'Program-General+Company',
                                'category__not_in' => 'Questions',
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => 1
                            );

                            $postslist5b = get_posts($args5b);
                            foreach ($postslist5b as $post) :
                                setup_postdata($post);

                                $vidAlt = get_post_custom_values('Video');
                                if(is_array($vidAlt)):
                                    foreach ( $vidAlt as $key=> $value ) {
                                        $image = $value;
                                    }
                                endif;
                            ?>
                                <div class="progImages">
                                    <img src="/wp-content/uploads/<?php echo $image ?>" alt="program image" />
                                </div><!--.progImages-->
                            <?php endforeach ?>
                        </section><!--.company-->

                    </div><!--.box-->
                </section><!--#section5-->
            </div><!--.progVal-->

            <div id="val4" class="progVal val4">
                <article class="hdrProgVal">
                    <div class="box">
                        <h3>Join the global movement of <span class="educator">educators</span><span class="company">change agents</span></h3>
                    </div><!--.box-->
                </article><!--.hdrProgVal-->

                <section id="section6" class="programSection">
                    <div class="box">
                        <section class="educator">
                            <h3>See the results and share best practices with our global network of educators</h3>
                            <p>Using pre and post-test evaluations for students and teachers in addition to community-level school climate reports, Move This World evaluates whether a school and Transformation Team has met its goals. At the one year mark, we celebrate the accomplishments and offer recommendations for years two and three. Throughout our partnership, you share tips, challenges, and solutions with educators from around the world.</p>

                            <?php
                            $args6a = array(
                                'category_name' => 'Program-General+Educator',
                                'category__not_in' => 'Questions',
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => 1
                            );
                            $postslist6a = get_posts($args6a);
                            foreach ($postslist6a as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="progImages gridImages">
                                    <?php the_content(); ?>
                                </div><!--.progImages-->
                            <?php endforeach ?>
                        </section><!--.educator-->

                        <section class="company">
                            <h3>See the results and share best practices with our global network of leaders</h3>
                            <p>Using pre and post-test evaluations for your employees, Move This World evaluates whether your company has met its goals. At the one year mark, we will celebrate the accomplishments and offer recommendations for subsequent programming. Throughout our partnership, you can share tips, challenges, and solutions with other corporate leaders from around the world.</p>

                            <?php
                            $args6b = array(
                                'category_name' => 'Program-General+Company',
                                'category__not_in' => 'Questions',
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'numberposts' => 1
                            );
                            $postslist6b = get_posts($args6b);
                            foreach ($postslist6b as $post) :
                                setup_postdata($post);
                            ?>
                                <div class="progImages gridImages">
                                    <?php the_content(); ?>
                                </div><!--.progImages-->
                            <?php endforeach ?>
                        </section><!--.company-->

                    </div><!--.box-->
                </section><!--#section6-->
            </div><!--.progVal-->

            <div class="programSection progSignUp">
                <div class="box">
                    <h3>What&rsquo;s next?</h3>

                    <p class="educator">Our trainings and programmatic support create a safe environment for healthy self-expression, allowing students to re-direct their energy into creativity instead of violence and teachers to actively shape their school culture. By partnering with Move This World, schools decrease suspensions and incident reports, increase attendance, improve educator morale and retention, and provide students with the necessary skills to succeed in college and the workplace.</p>

                    <p class="company">By partnering with Move This World, companies address and help employees manage their emotional wellness, stress management and inter-office conflicts. All training programs are rooted in the process of self-reflection and self-care using a process that does not embarrass employees but instead provides a safe space for them to explore difficult issues as a collective.</p>

                    <a href="/partners" class="btnProgSignUp">My <span class="educator">School</span><span class="company">Company</span> Is Ready</a>
                </div><!--.box-->
            </div><!--.progSignUp-->
                
        </div><!--.programContent-->

    </section><!--.pageContent-->
        
    <?php endwhile; ?>
<?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>