<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Board Members
 */

get_header();
?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent pageMovers"> 
        <h1>Board Members</h1>
        <section class="boardMembers clearfix">
            <?php
            $args = array(
                'category_name' => 'Board',
                'post_type' => 'post',
                'meta_key' => 'Board_Order',
                'orderby' =>  'meta_value_num title',
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

                $names = explode(" ", $moverName);

                $honorific = get_post_custom_values('Honorific');
                $moverTitle = get_post_custom_values('MTW_Title');
            ?>
            <section id="<?php echo $noSpaceName ?>" class="boardMember clearfix">
                <div class="imgBoard">
                    <?php
                    if ( has_post_thumbnail() ) {
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                        echo "<img src=\"$image_url[0]\" alt=\"$moverName\" />";
                    } ?>
                </div><!--.imgBoard-->
                <article class="boardContent box">
                    <h3><?php 
                        echo $names[1]." ".$names[2]." ".$names[0];
                        if(is_array($honorific)):
                            foreach ( $honorific as $key=> $value ) {
                                echo ", ".$value;
                            }
                        endif;
                        ?>
                        <span><?php
                        if(is_array($moverTitle)):
                            foreach ( $moverTitle as $key=> $value ) {
                                echo $value;
                            }
                        endif;
                        ?></span>
                    </h3>
                    <?php the_content(); ?>
                </article><!--.boardContent-->
            </section><!--.boardMember-->
            <?php endforeach ?>
        </section><!--boardMembers-->
            
        <h1>Advisory Board Members</h1>
        <section class="advisoryMembers clearfix">
            <?php
            $args = array(
                'category_name' => 'Advisory',
                'post_type' => 'post',
                'orderby' =>  'title',
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
                $names = explode(" ", $moverName);

                $honorific = get_post_custom_values('Honorific');
            ?>
            <section id="<?php echo $noSpaceName ?>" class="boardMember clearfix">
            	<div class="imgBoard">
					<?php
                    if ( has_post_thumbnail() ) {
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                        echo "<img src=\"$image_url[0]\" alt=\"$moverName\" />";
                    } ?>
                </div><!--.imgBoard-->
                <article class="boardContent box">
                    <h3><?php 
                        echo $names[1]." ".$names[2]." ".$names[0];
                        if(is_array($honorific)):
                            foreach ( $honorific as $key=> $value ) {
                                echo ", ".$value;
                            }
                        endif;
                    ?></h3>
                    <?php the_content(); ?>
                </article><!--.boardContent-->
            </section><!--.boardMember-->
            <?php endforeach ?>
        </section><!--advisoryBoard-->
        
    </section><!--.pageContent .pageMovers-->
    
    <?php endwhile; ?>
  <?php endif; ?>
</div><!--.mtwPage-->

<?php get_footer(); ?>