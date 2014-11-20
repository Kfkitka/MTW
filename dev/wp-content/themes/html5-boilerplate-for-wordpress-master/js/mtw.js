var windowWidth, moverSelector, thisHeight, descHeight, footerHeight, progHeight, viewportHeight, programPosition;

jQuery(document).ready(function($) {
	//MOBILE NAV
	$('body').on('tap', '.btnNav', function(){
		$('.mainNav').toggleClass('active');
		$('.hdrMTW').toggleClass('unsticky');
		
		return false;
	});
	
	//MOVERS PAGE	
	$('body').on('tap', '.indivMover', function(){
		windowWidth = $('.pageContent>.box').width();
		moverSelector = $(this).children('a').attr('href');
		
		$('.indivMover').css('height','');
		$('.moverContent').css('width',windowWidth);
		
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		} else{
			$('.indivMover').removeClass('active');
			
			$(this).addClass('active');
			thisHeight = $(this).children('a').height();
			descHeight = $(moverSelector).height();
			
			$(this).css('height',descHeight + 30 + thisHeight);
			
		}
		return false;
	});
	
	//PROGRAM PAGE
	footerHeight = $('footer').outerHeight(true);	
	$('body').on('tap', '.progChoices a', function(){
		var programSelector = $(this).attr('href');
		
		if($(programSelector).hasClass('active')){
		} else{
			$('.program,.prograContent').removeClass('active');
			$('.progNavContent').removeClass('fixed');
			
			$(programSelector).addClass('active');
			$('.programContent').addClass('active');
		}

		//set program nav
		progHeight = $('.programContent').height();
		viewportHeight = $(window).height() - 80;
		programPosition = $('.program.active').offset().top - 80;
		$('.programNav').css('height',progHeight);
		
		$('html, body').animate({
			scrollTop: $(programSelector).offset().top - 80
		},'fast');

		return false;
	});
});

$(window).scroll(function() {
	//set nav heights
	if($('.program').hasClass('active')){
		if($(window).scrollTop() >= programPosition){
			$('.progNavContent').addClass('fixed').css('height','');
		} else{
			$('.progNavContent').removeClass('fixed').css('height',viewportHeight);
		}

		var viewport = $(window).scrollTop() + $(window).height()
		var footerPosition = $('footer').offset().top;
		if(viewport >= footerPosition){
			$('.progNavContent').css('bottom',(viewport - footerPosition));
		} else{
			$('.progNavContent').css('bottom','');
		}
		
	}
});

jQuery(window).resize(function(){
	$('.indivMover').removeClass('active').css('height','');
	$('.program').removeClass('active');
	
	programPosition = $('.program').offset().top - 80;
});