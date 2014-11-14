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
            <p>Who We Are</p>
            <ul>
              <li><a href="/about">About Us</a></li>
              <li><a href="/about/values">Values</a></li>
              <li><a href="/about/our-story">Our Story</a></li>
              <li><a href="/about/movers-and-shakers">Movers &amp; Shakers</a></li>
            </ul>
        </div>
        <div class="what col">
            <p>What We Are</p>
            <ul>
              <li><a href="/programs">Timeline</a></li>
              <li><a href="/programs/social-impact">Social Impact</a></li>
              <li><a href="/join-us">Our Culture</a></li>
            </ul>
        </div>
        <div class="withUs col">
            <p>Move With Us</p>
            <ul>
              <li><a href="/join-us/join-mtw">Join Team MTW</a></li>
              <li><a href="/join-us/support">Support Our Work</a></li>
              <li><a href="/join-us/connect">Connect With Us</a></li>
              <li><a href="/learn-more">Learn More</a></li>
            </ul>
        </div>
        <ul class="col">
        	<li><a target="_blank">Access to Portal</a></li>
        </ul>
  </div><!--.box-->
</footer>
</div> <!--! end of #container -->

<?php /*Javascript at the bottom for fast page loading*/ ?>
<?php /*Grab Google CDN's jQuery. fall back to local if necessary*/ ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slides.min.jquery.js" type="text/javascript" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bpopup.min.js" type="text/javascript" ></script>

<script type="text/javascript">	
	//mtw carousel
	var mtwLength;
	var mtwWhere;
	var slideWidth;
	function mtwCarousel(){
		mtwLength = 0;
		mtwWhere = 1;
		slideWidth = $('.mtwViewport li').width();
		$('.mtwCarousel').scrollTo('0px');
		$('.mtwViewport li').each(function(){
			mtwLength+=1;
			$('<a href="#" class="btnSelector spriteLink floatLeft" id="imgRadio'+mtwLength+'"></a>').html('<img src="wp-content/images/shim.gif" alt="radio selector" />').appendTo('.mtwCarouselSelectors');
			$('.btnSelector:first').addClass('active');
		});
		if(mtwLength > 1){
			$('.mtwNavCarousel, .mtwCarouselSelectors').css('display', 'block');
			$('.mtwViewport').css('width', mtwLength * slideWidth + 'px');
		}
		else {
			$('.mtwNavCarousel, .mtwCarouselSelectors').css('display', 'none');
		}	
	}
	
	function rotateSlide(){
		if (mtwLength == mtwWhere){
			$('.mtwCarousel').scrollTo('0px', 500);
			mtwWhere = 1;
			$('.btnSelector').removeClass('active');
			$('#imgRadio1').addClass('active');
		} else	{
			$('.mtwCarousel').scrollTo('+='+slideWidth+'px', 500);
			mtwWhere++;
			$('.btnSelector').removeClass('active');
			$('#imgRadio' + mtwWhere).addClass('active');
		}
	}
	
	function mtwCarouselControls(){
		var autoRotate = setInterval(rotateSlide, 5000);
		//Left
		$('.btnMTWArrowLeft').click(function(){ 
			clearInterval(autoRotate);
			if (mtwWhere == 1){
				$('.mtwCarousel').scrollTo((mtwLength - 1) * slideWidth + 'px', 500);
				mtwWhere = mtwLength;
				$('.btnSelector').removeClass('active');
				$('#imgRadio' + mtwWhere).addClass('active');
			} else{
				$('.mtwCarousel').scrollTo('-='+slideWidth+'px', 500);
				mtwWhere--;
				$('.btnSelector').removeClass('active');
				$('#imgRadio' + mtwWhere).addClass('active');
			}
			setTimeout(function(){
				autoRotate = setInterval(rotateSlide, 5000)
			}, 1000);
			return false;
		});

		//Right
		$('.btnMTWArrowRight').click(function(){
			clearInterval(autoRotate);
			if (mtwLength == mtwWhere){
				$('.mtwCarousel').scrollTo('0px', 500);
				mtwWhere = 1;
				$('.btnSelector').removeClass('active');
				$('#imgRadio1').addClass('active');
			} else{
				$('.mtwCarousel').scrollTo('+='+slideWidth+'px', 500);
				mtwWhere++;
				$('.btnSelector').removeClass('active');
				$('#imgRadio' + mtwWhere).addClass('active');
			}
			setTimeout(function(){
				autoRotate = setInterval(rotateSlide, 5000)
			}, 1000);
			return false;
		});
		
		//Selectors
		$('.btnSelector').click(function(){
			var imgNumSelector = $(this).attr('id').substring(8);
			clearInterval(autoRotate);
			$('.mtwCarousel').scrollTo('#slide' + imgNumSelector, 500);
			mtwWhere = imgNumSelector;
			$('.btnSelector').removeClass('active');
			$(this).addClass('active');
			setTimeout(function(){
				autoRotate = setInterval(rotateSlide, 5000)
			}, 1000);
			return false;
		});
	}

	$(document).ready(function($){
		//HEADER SCROLL
		var homePage = '<?php echo home_url('/'); ?>';
		//console.log(homePage);
		if (document.location.href === homePage) {
			$('.hdrMTW').addClass('sticky');
		}
					
		//CAROUSELS
		mtwCarousel();
		mtwCarouselControls();
		
		//MAP CALLOUTS
		$('.mapPoint').click(function(){
			var mapSelector = $(this).attr('href');
			$('.mapCallout').removeClass('active');
			$(mapSelector).addClass('active');
			return false;
		});
		
		$('.btnCloseCallout').click(function(){
			$('.mapCallout').removeClass('active');
			return false;
		});

		//SIDEBAR HEIGHT
		var pageHeight = $('.pageContent').height();
		var sidebarHeight = $('.mtwSidebar').height();
		//console.log(pageHeight, sidebarHeight);
		if (pageHeight > (sidebarHeight + 50)) {
			$('.mtwSidebar').css('height', (pageHeight-65) + 'px');
		} else {}
		
		//MARGINS
		$('.indivMover:nth-child(4n)').addClass('lastColumn');
		
		//POPUPS
		$('.moverLink').click(function(e){
			var popupSelector = $(this).attr('href');
			$('.popupPerson').removeClass('active');
			e.preventDefault();
			$(popupSelector).addClass('active');
			$('.moverPopups').bPopup({
				position: ['auto', 'auto'],
				closeClass: ['btnClosePopup']
			});
		});
	});
</script>

<?php /*Google Analytics*/ ?>
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

