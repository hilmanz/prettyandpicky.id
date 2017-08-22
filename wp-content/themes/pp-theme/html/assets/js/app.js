/**
 * Main Javascript
 *
 * @author  	Kodr Indonesia <halo@kodrindonesia.com>
 * @since 		Mar 2, 2017
 **/


$(function() {
	$('#btn-play-video').on('click', function(e) {
		e.preventDefault();

		$(this).hide();

		var $video = $('.top__video').find('iframe');
		var $videoUrl = $video.attr('src');

		$('.top__video').css('padding-top','0').find('iframe').attr('src',$videoUrl + '&autoplay=1').show();
	});

	$('#btn-open-menu').on('click', function(e) {
		e.preventDefault();
		$('.main-navigation').fadeIn();
	});

	$('#btn-close-menu').on('click', function(e) {
		e.preventDefault();
		$('.main-navigation').fadeOut();
	});

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > $('.top__video').height() + ($('.main__banner').height() / 3) + 80) {
	        $('#nav').addClass('affix');
	    } else {
	        $('#nav').removeClass('affix');
	    }
	});

	$('.select2').select2();
});