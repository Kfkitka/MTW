var windowWidth, moverSelector, thisHeight, descHeight;

jQuery(document).ready(function($) {
	//MOBILE NAV
	$('body').on('tap', '.btnNav', function(){
		$('.hdrMTW nav').toggleClass('active');
		
		return false;
	});
	
	//MOVERS PAGE
	$('.indivMover').click(function(){
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
});

jQuery(window).resize(function(){
	$('.indivMover').removeClass('active').css('height','');
});