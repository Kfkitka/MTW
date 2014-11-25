<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<footer class="clearfix">
	<div class="box">
    	<div class="col">
            <section class="socialMedia clearfix">
                <a href="http://facebook.com/MoveThisWorld" class="btnFB" target="_blank">
                    <i class="fa">&#xf09a;</i>
                </a>
                <a href="http://twitter.com/move_thisworld" class="btnTW" target="_blank">
                    <i class="fa">&#xf099;</i>
                </a>
                <a href="http://linkedin.com/company/move-this-world" class="btnIn" target="_blank">
                    <i class="fa">&#xf0e1;</i>
                </a>
                <a href="http://instagram.com/move_thisworld" class="btnIG" target="_blank">
                    <i class="fa">&#xf16d;</i>
                </a>
                <a href="http://youtube.com/MoveThisWorld" class="btnYT" target="_blank">
                    <i class="fa">&#xf167;</i>
                </a>
                <a href="http://pinterest.com/movethisworld" class="btnPin" target="_blank">
                    <i class="fa">&#xf0d2;</i>
                </a>
            </section>
            <p>&copy; <?php echo date('Y'); ?> Move This World</p>
        </div>
        <div class="who col">
            <p class="colHead">Who We Are</p>
            <ul>
              <li><a href="/about">About Us</a></li>
              <li><a href="/about/our-story">Our Story</a></li>
              <li><a href="/about/our-team">Our Team</a></li>
            </ul>
        </div>
        <div class="what col">
            <p class="colHead">What We Do</p>
            <ul>
              <li><a href="/program">Program</a></li>
              <li><a href="/think-tank/global-movement">Global Movement</a></li>
              <li><a href="/partners/case-studies">Social Impact</a></li>
              <li><a href="/think-tank">Think Tank</a></li>
            </ul>
        </div>
        <div class="withUs col">
            <p class="colHead">Move With Us</p>
            <ul>
              <li><a href="/partners">Become A Partner</a></li>
              <li><a href="/about/careers">Careers</a></li>
              <li><a href="/about/connect">Contact Us</a></li>
              <li><a href="/donate">Donate</a></li>
            </ul>
        </div>
        <ul class="col">
        	<li><a target="_blank">Access to Portal</a></li>
        </ul>
  </div><!--.box-->
</footer>
</div> <!--! end of #container -->

<?php //Grab Google CDN's jQuery. fall back to local if necessary ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.custom.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mtw.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script type="text/javascript">	
	$(document).ready(function($){
	});
</script>
<![endif]-->

<?php //Google Analytics ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49778355-1', 'movethisworld.org');
  ga('send', 'pageview');
</script>

<?php wp_footer(); ?>

</body>
</html>

