<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
  Template Name:  Page & Images
 */

get_header();
?>

<div id="main" class="mtwWrapper mtwPage" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="pageContent">
     	<div class="box clearfix">
        <h1><?php the_title(); ?></h1>

        <p class="title"><?php
          $hdrTitle = get_post_custom_values('Page_Title');
          if(is_array($hdrTitle)):
            foreach ( $hdrTitle as $key=> $value ) {
              echo $value;          
            }
          endif;
        ?></p>

        <?php if ( has_post_thumbnail() ) {
          $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
          echo "<img src=\"$image_url[0]\" alt=\"";
          the_title();
          echo "\" class=\"fullWidth\" />";
        } ?>

        <section class="imgRow">
          <div class="box clearfix">
            <h3 class="hdrRow"><?php
              $imgTitle = get_post_custom_values('Image_Title');
              if(is_array($imgTitle)):
                foreach ( $imgTitle as $key=> $value ) {
                  echo $value;          
                }
              endif;
            ?></h3>

            <div class="clearfix">
            <?php
            $currentTitle = get_the_title();
            if($currentTitle == 'Best Practices'){
                $postType = 'Best-Practices';
            }
            $args = array(
              'category_name' => $postType,
              'post_type' => 'post',
              'order' => 'ASC',
              'post_status' => 'publish',
              'numberposts' => 4
            );
            $postslist = get_posts($args);
            foreach ($postslist as $post) :
              setup_postdata($post);
            ?>
              <article class="value">
                <?php
                if ( has_post_thumbnail() ) {
                  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
                  echo "<img src=\"$image_url[0]\" alt=\"value icon\" class=\"imgValue\" />";
                } else {
                  echo "<div class=\"imgValue\"></div>";
                }?>
                <?php the_content(); ?>
              </article>

            <?php endforeach; ?>
            </div><!--.clearfix-->
            <?php wp_reset_query(); ?>

          </div><!--.box-->
        </section><!--.imgRow-->

		  	<?php the_content(); ?>
      </div><!--.box-->
    </section><!--.pageContent-->

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>