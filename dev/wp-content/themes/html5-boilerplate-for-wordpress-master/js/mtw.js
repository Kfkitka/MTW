//Right
jQuery('.btnNavRight').click(function(){
});
jQuery('body').on('swipeleft', '.viewport li', function(){
});

jQuery(document).ready(function($) {
	//MOVERS PAGE
	$('.indivMover').click(function(){
		var windowWidth = $('.pageContent').width();
		var moverSelector = $(this).children('a').attr('href');
		
		$('.indivMover').css('height','');
		$('.moverContent').css('width',windowWidth);
		
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		} else{
			$('.indivMover').removeClass('active');
			
			$(this).addClass('active');
			var thisHeight = $(this).children('a').height();
			var descHeight = $(moverSelector).height();
			
			console.log(thisHeight);
			$(this).css('height',descHeight + 30 + thisHeight);
			
		}
		return false;
	});
	jQuery('body').on('swipeleft', '.viewport li', function(){});
});

jQuery(window).resize(function(){
});