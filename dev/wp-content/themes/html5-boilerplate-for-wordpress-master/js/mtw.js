//MOVER VARIABLES
var windowWidth, parent, moverSelector, thisHeight, descHeight;
//PROGRAM VARIABLES
var viewportWidth, hdrPosition, hdrHeight, signUp;
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

		return false;
	});
	
	//MOVERS PAGE	
	$('body').on('tap', '.indivMover>a', function(){
		windowWidth = $('.pageContent>.box').width();
		parent = $(this).parent('.indivMover');
		moverSelector = $(this).attr('href');
		viewportWidth= $(window).width();
		
		$('.indivMover').css('height','');
		
		if($(parent).hasClass('active')){
			$(parent).removeClass('active');
		} else{
			$('.indivMover').removeClass('active');
			
			$(parent).addClass('active');
			thisHeight = $(this).height();
			descHeight = $(moverSelector).outerHeight(true);
			
			$(parent).css('height',descHeight + 30 + thisHeight);
			
		}

		if(viewportWidth < 501){
			$('html, body').animate({
				scrollTop: $(this).offset().top - 80
			},'fast');	
		}
		
		return false;
	});
	
	//PROGRAM PAGE
	$('body').on('tap', '.progChoices a', function(){
		var programType = $(this).attr('href');
		viewportWidth= $(window).width();
		
		$(programType).removeClass('inactive');
		if(programType == '.educator'){
			$('.company').addClass('inactive');
		} else if(programType == '.company'){
			$('.educator').addClass('inactive');
		}

		if(!($('.programContent').hasClass('active'))){	
			$('.programContent').addClass('active');
		}
		
		$('html, body').animate({
			scrollTop: $('#val1').offset().top - 80
		},'fast');

		//set hdr as fixed & fix padding
		var i = 0;
		$('.hdrProgVal').each(function(){
			values.push($(this).offset().top - 80);
			heights.push($(this).outerHeight(true));

			if(viewportWidth > 569){
				if(heights[i] > 72){
					$(this).parent('.progVal').css('padding-top', heights[i]);
				}
			} else {
				if(heights[i] > 56){
					$(this).parent('.progVal').css('padding-top', heights[i]);
				}
			}

			i++;
		});

		//find end of scrolling
		signUp = $('.progSignUp').offset().top - 80;

		return false;
	});

	//SIGN UP PAGE
	$('body').on('tap', '.bigBtn', function(){
		$('html, body').animate({
			scrollTop: $('#signup').offset().top - 80
		},'fast');

		return false;
	});
});

var onWindowResize = debounce(function(){
	//MOVER FUNCTIONS
	if($('.indivMover').hasClass('active')){
		thisHeight = $('.indivMover.active a').height();
		descHeight = $(moverSelector).height();
			
		$('.indivMover.active').css('height',descHeight + 30 + thisHeight);
	}

	//PROGRAM FUNCTIONS
	if($('.programContent').hasClass('active')){
		viewportWidth = $(window).width();

		//set hdr as fixed
		$('.progVal').removeClass('active bottom');
		var i = 0;
		$('.hdrProgVal').each(function(){
			values[i] = $(this).offset().top - 80;
			heights[i] = $(this).outerHeight(true);

			if(viewportWidth > 569){
				if(heights[i] > 72){
					$(this).parent('.progVal').css('padding-top', heights[i]);
				}
			} else {
				if(heights[i] > 56){
					$(this).parent('.progVal').css('padding-top', heights[i]);
				}
			}

			i++;
		});

		//find end of scrolling
		signUp = $('.progSignUp').offset().top - 80;

		//readjust headers
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
		} else if(scrollY < signUp){
			$('.progVal').removeClass('active bottom');
			$('.val4').addClass('active');	
		}
		
		if(scrollY >= (signUp - heights[3])){
			$('.val4').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[3] - heights[2])){
			$('.val3').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[2] - heights[1])){
			$('.val2').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[1] - heights[0])){
			$('.val1').removeClass('active').addClass('bottom');
		}
	}
}, 250);
window.addEventListener('resize', onWindowResize);
//jQuery(window).resize(function(){});

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
		} else if(scrollY < signUp){
			$('.progVal').removeClass('active bottom');
			$('.val4').addClass('active');	
		}
		
		//scroll down
		if(scrollY >= (signUp - heights[3])){
			$('.val4').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[3] - heights[2])){
			$('.val3').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[2] - heights[1])){
			$('.val2').removeClass('active').addClass('bottom');
		} else if(scrollY >= (values[1] - heights[0])){
			$('.val1').removeClass('active').addClass('bottom');
		}
		
	}
});