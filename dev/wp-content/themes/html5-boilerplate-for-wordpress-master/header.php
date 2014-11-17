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
	<!-- Designs by Move This World.  UX/UI/Development by Jenna Chin and Kerry Kitka.  Copyright Move This World -->
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame. Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true); ?> </title>
    
    <meta name="description" content="Move This World is a global nonprofit that uses creative expression as a vehicle to transform conflict, violence and bullying in communities.">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    <link href="<?php echo get_template_directory_uri(); ?>/css/mtw.css" rel='stylesheet' type='text/css'>
    
    <?php
	//Check for nav ending & add active style
	$parent = $post->post_parent;
	$parentTitle = get_the_title($post->post_parent);
	?>

	<style type="text/css">
	<?php if ($parentTitle=="About"):?>
	#btnAbout	{
		color:#2aa0d6;
	}
	<?php endif;?>

	<?php if ($parentTitle=="Program"):?>
	#btnProgram	{
		color:#2aa0d6;
	}
	<?php endif;?>
	
	<?php if ($parentTitle=="Partners"):?>
	#btnPartners	{
		color:#2aa0d6;
	}
	<?php endif;?>
	
	<?php if ($parentTitle=="Blog"):?>
	#btnBlog	{
		color:#2aa0d6;
	}
	<?php endif;?>
	
	<?php if ($parentTitle=="Donate"):?>
	#btnDonate	{
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

  <div class="container">
    <header class="hdrMTW" role="banner">
    	<div class="box clearfix">
            <a href="<?php bloginfo('url'); ?>" class="logoMTW">
                <img src="<?php bloginfo('url'); ?>/wp-content/images/shim.gif" alt="Move This World" />
            </a>
            <nav>
            	<a href="#" class="btnNav"><i class="fa">&#xf0c9;</i></a>
                <ul class="mainNav">
                    <li class="navItem">
                        <a href="/about" id="btnAbout">About</a>
                        <ul class="subNav">
                        	<div class="box">
                                <li class="navItemChild">
                                    <a href="/about/values">Values</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/about/our-story">Our Story</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/about/movers-and-shakers">Movers &amp; Shakers</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/about/join-us">Join Us</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/about/join-mtw">Join Team MTW</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/about/connect">Connect With Us</a>
                                </li>
                            </div><!--.box-->
                        </ul>
                    </li>
                    <li class="navItem">
                        <a href="/programs" id="btnProgram">Program</a>
                        <ul class="subNav">
                        	<div class="box">
                                <li class="navItemChild">
                                    <a href="/programs/employee-wellness">Employee Wellness</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/programs/families">Parents &amp; Families</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/programs/social-impact">Social Impact</a>
                                </li>
                            </div><!--.box-->
                        </ul>
                    </li>
                    <li class="navItem">
                        <a href="/movement" id="btnPartners">Partners</a>
                        <ul class="subNav">
                        	<div class="box">
                                <li class="navItemChild">
                                    <a href="/movement/latin-america">Latin America</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/movement/the-philippines">The Philippines</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/movememt/europe">Europe</a>
                                </li>
                            </div><!--.box-->
                        </ul>
                    </li>
                    <li class="navItem">
                        <a href="/learn-more" id="btnBlog">Think Tank</a>
                        <ul class="subNav">
                        	<div class="box">
                                <li class="navItemChild">
                                    <a href="/learn-more">Learn More</a>
                                </li>
                                <li class="navItemChild">
                                    <a href="/learn-more/resources">Resources</a>
                                </li>
                            </div><!--.box-->
                        </ul>
                    </li>
                    <li class="navItem">
                        <a href="/donate/" id="btnDonate">Donate</a>
                    </li>
                </ul>
            </nav>
        </div><!--.box-->
    </header>