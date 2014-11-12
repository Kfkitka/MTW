<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- Designed by Jessica Goldner.  UX/UI/Development by Jenna Chin.  Development support by Kerry Kitka.  Copyright Move This World -->
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame. Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true); ?> </title>
    
    <meta name="description" content="Move This World is a global nonprofit that uses creative expression as a vehicle to transform conflict, violence and bullying in communities.">
    <meta name="author" content="">
   
    <meta name="viewport" content="width=device-width">
    
    <!-- OG Tags -->
    <meta property="og:title" content="Move This World" />
    <meta property="og:site_name" content="Move This World"/>
    <meta property="og:url" content="http://movethisworld.org" />
    <meta property="og:description" content="Move This World is a global nonprofit that uses creative expression as a vehicle to transform conflict, violence and bullying in communities." />
	<meta property="og:image" content="http://movethisworld.org/wp-content/images/fbMTWLogo.png" />
    <meta property="og:type" content="website"/>

    <!-- Favicon.ico and apple-touch-icon.png -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/main.css") ?>
    
    <!-- Required Wordpress CSS -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/mtw.css" rel='stylesheet' type='text/css'>
    
    <?php
	//Check for nav ending & add active style
	$permalink = get_permalink();
	$homePage = home_url('/');
	$subPage = substr($permalink, 25, 5);
	?>

	<style type="text/css">
	<?php if ($permalink==$homePage):?>
	.btnHome	{
		background-position:bottom left;
	}
	<?php endif;?>

	<?php if ($subPage=="about"):?>
	.navLink#btnAbout	{
		color:#2aa0d6;
	}
	<?php endif;?>

	<?php if ($subPage=="progr"):?>
	.navLink#btnPrograms	{
		color:#2aa0d6;
	}
	<?php endif;?>
	
	<?php if ($subPage=="movem"):?>
	.navLink#btnMovement	{
		color:#2aa0d6;
	}
	<?php endif;?>
	
	<?php if ($subPage=="learn"):?>
	.navLink#btnLearnMore	{
		color:#2aa0d6;
	}
	<?php endif;?>
	
	<?php if ($subPage=="join-"):?>
	.navLink#btnJoinUs	{
		color:#2aa0d6;
	}
	<?php endif;?>
	</style>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div id="container">
    <header class="hdrMTW" role="banner">
    	<section class="hdrContent clearfix">
      		<a href="<?php bloginfo('url'); ?>" class="spriteLink logoMTW floatLeft">
            	<img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Move This World" />
            </a>
      		<article class="mtwQuote floatLeft">
                <p>You can&rsquo;t learn when you&rsquo;re afraid.</p>
			</article><!-- .mtwQuote -->
            <section class="socialMedia floatRight">
                <a href="http://facebook.com/MoveThisWorld" class="btnFB btnSocial spriteLink floatLeft" target="_blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Facebook" />
                </a>
                <a href="http://twitter.com/move_thisworld" class="btnTW btnSocial spriteLink floatLeft" target="_blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Twitter" />
                </a>
                <a href="http://linkedin.com/company/move-this-world" class="btnIn btnSocial spriteLink floatLeft" target="_blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="LinkedIn" />
                </a>
                <a href="http://instagram.com/move_thisworld" class="btnIG btnSocial spriteLink floatLeft" target="_blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Instagram" />
                </a>
                <a href="http://youtube.com/MoveThisWorld" class="btnYT btnSocial spriteLink floatLeft" target="_blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="YouTube" />
                </a>
                <a href="http://pinterest.com/movethisworld" class="btnPin btnSocial spriteLink floatLeft" target="_blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Pinterest" />
                </a>
            </section><!-- .socialMedia-->
      	</section><!-- .hdrContent -->
        <nav>
        	<ul class="mainNav">
                <li class="navItemParent floatLeft">
                	<a href="<?php bloginfo('url'); ?>" class="btnHome spriteLink">
                        <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Home" />
                    </a>
                </li>
                <li class="navItemParent floatLeft">
                	<a href="/about" id="btnAbout" class="navLink">about us</a>
                    <ul class="parentNav aboutNav">
                    	<li class="navItemChild">
                        	<a href="/about">About Us</a>
                        </li>
						<?php /*<li class="navItemChild">
                        	<a href="/about/what-we-do">What We Do</a>
                        </li> */?>
                        <li class="navItemChild">
                        	<a href="/about/values">Values</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/about/our-story">Our Story</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/about/movers-and-shakers">Movers &amp; Shakers</a>
                        </li>
                    </ul>
                </li>
                <li class="navItemParent floatLeft">
                	<a href="/programs" id="btnPrograms" class="navLink">our programs</a>
                    <ul class="parentNav programsNav">
                    	<li class="navItemChild">
                        	<a href="/programs">Our Programs</a>
                        </li>
                    	<?php /*<li class="navItemChild">
                        	<a href="/programs/schools">School Programs</a>
                        </li>*/ ?>
                        <li class="navItemChild">
                        	<a href="/programs/employee-wellness">Employee Wellness</a>
                        </li>
                        <?php /*<li class="navItemChild">
                        	<a href="/programs/educators">Educators</a>
                            <ul class="subNav programsSubNav">
                            	<li class="navItemGchild">
                                	<a href="/programs/educators/teacher-training">Teacher Training</a>
                                </li>
                                <li class="navItemGchild">
                                	<a href="/programs/educators/professional-development">Professional Development</a>
                                </li>
                            </ul>
                        </li>*/ ?>
                        <li class="navItemChild">
                        	<a href="/programs/families">Parents &amp; Families</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/programs/social-impact">Social Impact</a>
                        </li>
                    </ul>
                </li>
                <li class="navItemParent floatLeft">
                	<a href="/movement" id="btnMovement" class="navLink">global movement</a>
                    <ul class="parentNav movementNav">
                    	<li class="navItemChild">
                        	<a href="/movement">Global Movement</a>
                        </li>
                    	<?php /*<li class="navItemChild">
                        	<a href="/movement/us">United States</a>
                        </li>*/ ?>
                        <li class="navItemChild">
                        	<a href="/movement/latin-america">Latin America</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/movement/the-philippines">The Philippines</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/movememt/europe">Europe</a>
                        </li>
                    </ul>
                </li>
                <li class="navItemParent floatLeft">
                	<a href="/learn-more" id="btnLearnMore" class="navLink">learn more</a>
                    <ul class="parentNav learnMoreNav">
                    	<li class="navItemChild">
                        	<a href="/learn-more">Learn More</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/learn-more/resources">Resources</a>
                            <?php /*<ul class="subNav programsSubNav">
                            	<li class="navItemGchild">
                                	<a href="/learn-more/resources/literature">Literature Review</a>
                                </li>
                                <li class="navItemGchild">
                                	<a href="/learn-more/resources/reports">Published Reports</a>
                                </li>
                                <li class="navItemGchild">
                                	<a href="/learn-more/resources/newsletters">Newsletters</a>
                                </li>
                            </ul>*/ ?>
                        </li>
                        <?php /*<li class="navItemChild">
                        	<a href="/learn-more/videos">Videos</a>
                        </li>*/ ?>
                    </ul>
                </li>
                <li class="navItemParent floatLeft">
                	<a href="/join-us" id="btnJoinUs" class="navLink">join us</a>
                    <ul class="parentNav joinUsNav">
                    	<li class="navItemChild">
                        	<a href="/join-us">Join Us</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/join-us/join-mtw">Join Team MTW</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/join-us/support">Support Our Work</a>
                        </li>
                        <li class="navItemChild">
                        	<a href="/join-us/connect">Connect With Us</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <a href="/join-us/support/" class="btnDonate spriteLink"><span>donate</span>support our work</a>
    </header>