//MOVER VARIABLES
var windowWidth, moverSelector, thisHeight, descHeight;
//PROGRAM VARIABLES
var viewportHeight, hdrPosition, hdrHeight;
var values = [];
var heights = [];

//DEBOUNCE
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

jQuery(document).ready(function($) {
	//MOBILE NAV
	$('body').on('tap', '.btnNav', function(){
		$('.mainNav').toggleClass('active');
		$('.hdrMTW').toggleClass('unsticky');

		$('html, body').animate({ scrollTop: 0 },'fast');
		
		$('html, body').animate({ scrollTop: 0 },'fast');

		return false;
	});

	//SIDEBAR HEIGHT
	var pageHeight = $(window).height();
	var sidebarHeight = $('.mtwSidebar').height();
	if (pageHeight > (sidebarHeight + 120)) {
		$('.mtwSidebar').css('height', (pageHeight-120) + 'px');
	}
	
	//MOVERS PAGE	
	$('body').on('tap', '.indivMover', function(){
		windowWidth = $('.pageContent>.box').width();
		moverSelector = $(this).children('a').attr('href');
		
		$('.indivMover').css('height','');
		
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		} else{
			$('.indivMover').removeClass('active');
			
			$(this).addClass('active');
			thisHeight = $(this).children('a').height();
			descHeight = $(moverSelector).outerHeight(true);
			
			$(this).css('height',descHeight + 30 + thisHeight);
			
		}
		return false;
	});
	
	//PROGRAM PAGE
	$('body').on('tap', '.progChoices a', function(){
		var programType = $(this).attr('href');
		
		$(programType).removeClass('inactive');
		if(programType == '.educator'){
			$('.company').addClass('inactive');
		} else if(programType == '.company'){
			$('.educator').addClass('inactive');
		}

		if(!($('.programContent').hasClass('active'))){	
			$('.programContent').addClass('active');
		}

		//set section height
		viewportHeight = $(window).height() - 80;
		$('.progVal').css('min-height', viewportHeight);
		
		$('html, body').animate({
			scrollTop: $('#val1').offset().top - 80
		},'fast');

		//set hdr as fixed
		$('.hdrProgVal').each(function(){
			values.push($(this).offset().top - 80);
			heights.push($(this).outerHeight(true));
		});
		hdrHeight = $('#val1 .hdrProgVal').outerHeight(true);

		return false;
	});

	$('body').on('tap', '.example', function(){
		$(this).toggleClass('active');

		return false;
	});
});

$(window).scroll(function() {
	var scrollY = $(window).scrollTop();

	//PROGRAM PAGE
	if($('.programContent').hasClass('active')){
		//scroll up
		if(scrollY < values[0]){
			$('.progVal').removeClass('active bottom');
		} else if(scrollY < values[1]){
			$('.progVal').removeClass('active bottom');
			$('.val1').addClass('active');
		} else if(scrollY < values[2]){
			$('.progVal').removeClass('active bottom');
			$('.val2').addClass('active');	
		} else if(scrollY < values[3]){
			$('.progVal').removeClass('active bottom');
			$('.val3').addClass('active');	
		}
		
		//scroll down
		if(scrollY >= (values[3] - heights[2])){
			$('.val3').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[2] - heights[1])){
			$('.val2').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[1] - heights[0])){
			$('.val1').removeClass('active').addClass('bottom');
		}
		if(scrollY >= values[3]){
			$('.val4').addClass('active');	
		}
		
	}
});

var onWindowResize = debounce(function(){
	//MOVER FUNCTIONS
	if($('.indivMover').hasClass('active')){
		thisHeight = $('.indivMover.active a').height();
		descHeight = $(moverSelector).height();
			
		$('.indivMover.active').css('height',descHeight + 30 + thisHeight);
	}
}, 250);
window.addEventListener('resize', onWindowResize);
//jQuery(window).resize(function(){});