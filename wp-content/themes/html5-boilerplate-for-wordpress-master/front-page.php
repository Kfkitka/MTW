<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Front Page
 */

get_header(); ?>

<div id="main" class="mtwWrapper" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
        <section class="mtwMap">
        	<a href="#newYork" class="mapPoint pointNewYork spriteLink"><image src="wp-content/images/shim.gif" alt="New York, New York, USA" /></a>
            <a href="#newark" class="mapPoint pointNewark spriteLink"><image src="wp-content/images/shim.gif" alt="Newark, New Jersey, USA" /></a>
            <a href="#baltimore" class="mapPoint pointBmore spriteLink"><image src="wp-content/images/shim.gif" alt="Baltimore, Maryland, USA" /></a>
            <a href="#washDC" class="mapPoint pointWashDC spriteLink"><image src="wp-content/images/shim.gif" alt="Washington, DC, USA" /></a>
            <a href="#leipzig" class="mapPoint pointLeipzig spriteLink"><image src="wp-content/images/shim.gif" alt="Leipzig, Germany" /></a>
            <a href="#vienna" class="mapPoint pointVienna spriteLink"><image src="wp-content/images/shim.gif" alt="Vienna, Austria" /></a>
            <a href="#mexicoCity" class="mapPoint pointMexicoCity spriteLink"><image src="wp-content/images/shim.gif" alt="Mexico City, Mexico" /></a>
            <a href="#elSalvador" class="mapPoint pointElSalvador spriteLink"><image src="wp-content/images/shim.gif" alt="El Salvador" /></a>
            <a href="#bogota" class="mapPoint pointBogota spriteLink"><image src="wp-content/images/shim.gif" alt="Bogota, Colombia" /></a>
            <a href="#mindanao" class="mapPoint pointMindanao spriteLink"><image src="wp-content/images/shim.gif" alt="Mindanao, Philippines" /></a>
            
            <section id="newYork" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="New York, New York, USA" class="imgCalloutLocation imgCalloutNewYork floatLeft" /><p class="floatLeft hdrMapCallout">move this world<br /><b>new york, new york</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">MTW implements programming in all 5 boroughs. Within one year, suspensions in a New York City middle school dropped from 52 to 16.<a href="movement" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="newark" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Newark, New Jersey, USA" class="imgCalloutLocation imgCalloutNewark floatLeft" /><p class="floatLeft hdrMapCallout">move this world <b>newark, new jersey</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">Our school-based program gives Newark youth an opportunity to creatively engage with their peers and learn about strengthening their communities using movement and dance.<a href="movement" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="baltimore" class="mapCallout active">
                <image src="wp-content/images/shim.gif" alt="Baltimore, Maryland, USA" class="imgCalloutLocation imgCalloutBmore floatLeft" /><p class="floatLeft hdrMapCallout">move this world <b>baltimore, md</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">Our Baltimore elementary school programs yielded a 36% increase in students&rsquo; empathetic behavior toward a bullied peer.<a href="movement" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="washDC" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Washington, DC, USA" class="imgCalloutLocation imgCalloutWashDC floatLeft" /><p class="floatLeft hdrMapCallout">move this world <b>washington, dc</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">Our programs led to a 21% increase in D.C. elementary school students&rsquo; ability to identify other students&rsquo; emotions. <a href="movement" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="leipzig" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Leipzig, Germany" class="imgCalloutLocation imgCalloutLeipzig floatLeft" /><p class="floatLeft hdrMapCallout">move this world<br /><b>Leipzig, germany</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowRight clear" />
                <p class="mapCalloutDesc">MTW partnered with the City Hall of Leipzig to conduct workshops with youth from all around Europe in the movement-based curriculum to promote diversity, cooperation and empathy.<a href="movement/europe" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
                        
            <section id="vienna" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Vienna, Austria" class="imgCalloutLocation imgCalloutVienna floatLeft" /><p class="floatLeft hdrMapCallout">move this world<br /><b>vienna, austria</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowRight clear" />
                <p class="mapCalloutDesc">We empower individuals with non-violent strategies to manage emotions, stress and conflicts by utilizing active communication and dialogue.<a href="movement/europe" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="mexicoCity" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Mexico City, Mexico" class="imgCalloutLocation imgCalloutMexicoCity floatLeft" /><p class="floatLeft hdrMapCallout">move this world<br /><b>mexico city, mexico</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">MOVE THIS WORLD WAS SELECTED TO SHARE OUR INNOVATIVE BEST PRACTICES AT #CONECTA KULTURA: FOROS DE EMPRENDIMIENTOS CULTURALES IN MEXICO CITY.<a href="movement/latin-america" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="elSalvador" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="El Salvador" class="imgCalloutLocation imgCalloutElSalvador floatLeft" /><p class="floatLeft hdrMapCallout">move this world<br /><b>el salvador</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">Middle and high school youth enrolled at Programa Empresarial Sup&eacute;rate to learn civic skills and connect with like-minded youth around the world.<a href="movement/latin-america" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="bogota" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Bogota, Colombia" class="imgCalloutLocation imgCalloutBogota floatLeft" /><p class="floatLeft hdrMapCallout">move this world <b>bogot&aacute;, colombia</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowLeft clear" />
                <p class="mapCalloutDesc">Move This World&rsquo;s curriculum was born in Bogota where founder, Sara, was inspired by the bumpin&rsquo; beats of reggaeton.<a href="movement/latin-america" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
            
            <section id="mindanao" class="mapCallout">
                <image src="wp-content/images/shim.gif" alt="Mindanao, Philipines" class="imgCalloutLocation imgCalloutMindanao floatLeft" /><p class="floatLeft hdrMapCallout">move this world <b>mindanao, phillipines</b></p>
                <image src="wp-content/images/shim.gif" alt="arrow with dotted line" class="imgCalloutArrowLine imgCalloutArrowRight clear" />
                <p class="mapCalloutDesc">THROUGH OUR PARTNERSHIPS WITH SCHOOLS AND UNIVERSITIES, MTW PHILIPPINES IS WORKING WITH STUDENTS OF ALL AGES AND TEACHERS TO BECOME INTERNATIONALLY-ENGAGED, CIVIC LEADERS.<a href="movement/the-philippines" class="spriteLink calloutMore">Learn More</a><a href="#" class="spriteLink btnCloseCallout"><image src="wp-content/images/shim.gif" alt="close callout" /></a></p>
            </section>
        </section>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>