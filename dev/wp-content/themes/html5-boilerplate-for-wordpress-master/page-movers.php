<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  New Movers & Shakers
 */

get_header();

$permalink = get_permalink();
$homePage = home_url('/');
$subPage = substr($permalink, 29, 5);
	
if ($subPage=="about") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($subPage=="progr"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($subPage=="movem"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($subPage=="learn"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
} else if ($subPage=="join-"){
	$mainTitle = "Join Us";
	$subUrl = "join-us";
}?>

<div id="main" class="mtwWrapper mtwPage clearfix" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      	<article class="subTitleBar">
			<?php
			$currentTitle = get_the_title($post);
			$currentTitleImg = str_replace(' ', '', $currentTitle);
			$parent = $post->post_parent;
			$parentTitle = get_the_title($post->post_parent);
			$grandparent_get = get_post($parent);
			$grandparent = $grandparent_get->post_parent;
			// if there is a gparent, display the link
			if($grandparent != 0){
				echo '<a href="'.get_permalink($grandparent).'" class="gparentLink">'.get_the_title($grandparent).'</a> &raquo;';
			}
            // if there is a parent, display the link
			if($currentTitle != $mainTitle){
				echo '<a href="'.get_permalink($parent).'" class="parentLink">'.get_the_title($parent).'</a> &raquo;';
			}
			// current link
			?>
			<a href='<?php the_permalink() ?>' class="currentLink"><?php the_title(); ?></a> &raquo;
        </article><!--subTitleBar-->
        <article class="hdrPageImg">
        	<img src="<?php echo $homePage ?>wp-content/images/<?php echo $subUrl ?>/hdr<?php echo $currentTitleImg ?>.jpg" alt="page header" />
        </article><!--.hdrPageImg-->
        <section class="pageContent pageMovers">
        	
            <p class="pageTitle">Meet our Movers &amp; Shakers</p>
            <section class="moversShakers clearfix">
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
                <article class="indivMover floatLeft">
                	<a href="#<?php echo $noSpaceName ?>" class="spriteLink moverLink">
                    	<?php
						if (class_exists('MultiPostThumbnails')) {
							$multiPostId = "secondary-image";
							if (MultiPostThumbnails::has_post_thumbnail('post', $multiPostId)) {
								$imgMover = MultiPostThumbnails::get_post_thumbnail_id( 'post', $multiPostId, $post->ID );
								$attr = array('alt'	=> trim(strip_tags( $post->post_title )), 'class' => "imgMover");
								$image = wp_get_attachment_image( $imgMover, $multiPostId, false, $attr );
								echo $image;
							}
						};
						if ( has_post_thumbnail() ) {                                     
							echo get_the_post_thumbnail($post->ID, 'medium', 
								array( 'alt'	=> trim(strip_tags( $post->post_title )),
									 'class' => 'imgMoverRO' ) );
						}
						?>
                    </a>
                    <p>
                    	<span><?php echo $moverName ?></span>
						<?php
						$moverTitle = get_post_custom_values('MTW_Title');
						if(is_array($moverTitle)):
							foreach ( $moverTitle as $key=> $value ) {
							  echo $value;					
							}
						endif;
						?>
					</p>
                </article>
                <?php endforeach ?>
            </section><!--moversShakers-->
            
            <p class="pageTitle supportTitle">Board Members</p>
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
                <article class="indivMover floatLeft">
                	<a href="#<?php echo $noSpaceName ?>" class="spriteLink moverLink">
                    	<?php
						if (class_exists('MultiPostThumbnails')) {
							$multiPostId = "secondary-image";
							if (MultiPostThumbnails::has_post_thumbnail('post', $multiPostId)) {
								$imgMover = MultiPostThumbnails::get_post_thumbnail_id( 'post', $multiPostId, $post->ID );
								$attr = array('alt'	=> trim(strip_tags( $post->post_title )), 'class' => "imgMover");
								$image = wp_get_attachment_image( $imgMover, $multiPostId, false, $attr );
								echo $image;
							}
						};
						if ( has_post_thumbnail() ) {                                     
							echo get_the_post_thumbnail($post->ID, 'medium', 
								array( 'alt'	=> trim(strip_tags( $post->post_title )),
									 'class' => 'imgMoverRO' ) );
						}
						?>
                    </a>
                    <p>
                    	<span><?php echo $moverName ?></span>
						<?php
						$moverTitle = get_post_custom_values('MTW_Title');
						if(is_array($moverTitle)):
							foreach ( $moverTitle as $key=> $value ) {
							  echo $value;					
							}
						else:
							echo "Board Member";
						endif;
						?>
					</p>
                </article>
                <?php endforeach ?>
            </section><!--boardMembers-->
            
            <p class="pageTitle">Advisory Board Members</p>
            <section class="moversShakers clearfix">
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
                <article class="indivMover floatLeft">
                	<a href="#<?php echo $noSpaceName ?>" class="spriteLink moverLink">
                    	<?php
						if (class_exists('MultiPostThumbnails')) {
							$multiPostId = "secondary-image";
							if (MultiPostThumbnails::has_post_thumbnail('post', $multiPostId)) {
								$imgMover = MultiPostThumbnails::get_post_thumbnail_id( 'post', $multiPostId, $post->ID );
								$attr = array('alt'	=> trim(strip_tags( $post->post_title )), 'class' => "imgMover");
								$image = wp_get_attachment_image( $imgMover, $multiPostId, false, $attr );
								echo $image;
							}
						};
						if ( has_post_thumbnail() ) {                                     
							echo get_the_post_thumbnail($post->ID, 'medium', 
								array( 'alt'	=> trim(strip_tags( $post->post_title )),
									 'class' => 'imgMoverRO' ) );
						}
						?>
                    </a>
                    <p>
                    	<span><?php echo $moverName ?></span>Advisory Board Member
					</p>
                </article>
                <?php endforeach ?>
            </section><!--advisoryBoard-->
            
        </section><!--.pageContent .pageMovers-->
        
        <div class="moverPopups">
        	<a href="" class="btnClosePopup spriteLink"><img src="/wp-content/images/shim.gif" alt="close popup" /></a>
            <?php
			$args4 = array(
				'category_name' => 'Movers_Shakers',
				'post_type' => 'post',
				//'meta_key' => 'Mover_Order',  // order by Mover_Order custom field
				//'orderby' =>  'meta_value_num',
				'order' => 'ASC',
				'post_status' => 'publish',
				'numberposts' => -1
			);
			$postslist4 = get_posts($args4);
			foreach ($postslist4 as $post) :
				setup_postdata($post);
				$moverName = get_the_title();
				$trans = array(" " => "", "." => "", "ü" => "u", "&uuml;" => "u", "," => "");
				$noSpaceName = strtr($moverName,$trans);
				
				$postCat = get_the_category();
				$postCatName = $postCat[0]->cat_name;
				if($postCatName == "Board"){
					echo "<div id=\"$noSpaceName\" class=\"popupPerson supportPerson\">";
				} else{
					echo "<div id=\"$noSpaceName\" class=\"popupPerson\">";
				}
			?>
            	<?php
				if ( has_post_thumbnail() ) {                                     
					echo get_the_post_thumbnail($post->ID, 'medium', 
						array( 'alt'	=> trim(strip_tags( $post->post_title )),
							 'class' => 'imgMoverPopup floatLeft' ) );
				}
				?>
               	<p class="floatLeft personTitle">
                	<span class="moverName"><?php echo $moverName ?></span>
					<?php
					$moverTitle = get_post_custom_values('MTW_Title');
					if(is_array($moverTitle)):
						foreach ( $moverTitle as $key=> $value ) {
						  echo $value;					
						}
					elseif($postCatName == "Board"):
						echo "Board Member";
					elseif($postCatName == "Advisory"):
						echo "Advisory Board Member";
					endif;
					?>
                </p>
               	<article class="personBio clear">
					<?php the_content(); ?>
                </article>
            </div><!-- .popupPerson-->
            <?php endforeach ?>
        </div><!-- .moverPopups -->
     </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>