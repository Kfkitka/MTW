var windowWidth, moverSelector, thisHeight, descHeight, programPosition, footerPosition;

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
	$('body').on('tap', '.progChoices a', function(){
		var programSelector = $(this).attr('href');
		
		if($(programSelector).hasClass('active')){
		} else{
			$('.program').removeClass('active');
			
			$(programSelector).addClass('active');
			$('.programContent').addClass('active');
		}
		
		//set program nav
		var progHeight = $('.programContent').height();
		var viewportHeight = $(window).height() - 80;
		programPosition = $('.program').offset();
		footerPosition = $('footer').offset();
		$('.programNav').css('height',progHeight);
		$('.progNavContent').css('height',viewportHeight);
		
		//set value heights
		var valHeight1 = $('.programSection1').height();
		var valHeight2 = ($('.programSection2').height()) + ($('.programSection3').height());
		var valHeight3 = ($('.programSection4').height()) + ($('.programSection5').height());
		var valHeight4 = $('.programSection6').height();
		$('.progVal1').css('height',valHeight1);
		$('.progVal2').css('height',valHeight2);
		$('.progVal3').css('height',valHeight3);
		$('.progVal4').css('height',valHeight4);
		
		$('html, body').animate({
			scrollTop: $(programSelector).offset().top - 80
		},'fast');
		
		return false;
	});
});

$(window).scroll(function() {
	//set nav heights
	if($('.program').hasClass('active')){
		if($(window).scrollTop() > programPosition.top){
			$('.progNavContent').addClass('fixed');
		} else{
			$('.progNavContent').removeClass('fixed');
		}
	}
});

jQuery(window).resize(function(){
	$('.indivMover').removeClass('active').css('height','');
	$('.program').removeClass('active');
	
	programPosition = $('.program').offset();
});