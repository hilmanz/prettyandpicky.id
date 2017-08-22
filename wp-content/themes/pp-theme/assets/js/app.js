/**
 * Main Javascript
 *
 * @author  	Kodr Indonesia <halo@kodrindonesia.com>
 * @since 		Mar 2, 2017
 **/


jQuery(function() {
	jQuery('#btn-play-video').on('click', function(e) {
		e.preventDefault();

		jQuery(this).hide();

		var $video = jQuery('.top__video').find('iframe');
		var $videoUrl = $video.attr('src');

		jQuery('.top__video').css('padding-top','0').find('video').show();
		jQuery('#video')[0].play();
	});

	jQuery('#btn-play-video-gallery').on('click', function(e) {
		e.preventDefault();

		jQuery(this).hide();
		jQuery('.top__video').css('padding-top','0').find('iframe').show();
	});

	jQuery('#btn-open-menu').on('click', function(e) {
		e.preventDefault();
		jQuery('.main-navigation').fadeIn();
	});

	jQuery('#btn-close-menu').on('click', function(e) {
		e.preventDefault();
		jQuery('.main-navigation').fadeOut();
	});

	jQuery(window).bind('scroll', function () {
	    if (jQuery(window).scrollTop() > jQuery('.top__video').height() + (jQuery('.main__banner').height() / 3) + 80) {
	        jQuery('#nav').addClass('affix');
	    } else {
	        jQuery('#nav').removeClass('affix');
	    }
	});

	jQuery('#btn-bmi-share-fb').on('click', function(e) {
		e.preventDefault();
		var $url = jQuery(this).attr('href');
		// alert($url);
		FB.ui({
		  method: 'share',
		  href: 'http://theprettyandpicky.id/v2',
		  title: 'CEK INDEKS MASSA TUBUHMU DI SINI!',
		  description: 'Sudah ideal-kah berat badanmu? Cek di sini dan temukan tips untuk mendapatkan berat badan yang ideal.',
		  picture: 'http://theprettyandpicky.id/v2/wp-content/themes/pp-theme/assets/img/facebook-share-image.jpg'
		}, function(response){});
	});

	jQuery('.select-tahun-lahir').select2({
		placeholder: "TAHUN",
		minimumResultsForSearch: Infinity
	});

	jQuery('.select-bulan-lahir').select2({
		placeholder: "BULAN",
		minimumResultsForSearch: Infinity
	});

	jQuery('.select-tanggal-lahir').select2({
		placeholder: "TANGGAL",
		minimumResultsForSearch: Infinity
	});

	jQuery('.select-jenis-kelamin').select2({
		placeholder: "LAKI-LAKI/PEREMPUAN",
		minimumResultsForSearch: Infinity
	});

	jQuery('.btn-share').on('click', function(e) {
		e.preventDefault();

		var $url = jQuery(this).attr('href');
		PopupCenter($url, 'Share',600,400);
	});

	jQuery('#btn-open-search').on('click', function(e) {
		e.preventDefault();
		jQuery('.form-input-search').show().focus();
	});

	function PopupCenter(url, title, w, h) {
	    // Fixes dual-screen position                         Most browsers      Firefox
	    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
	    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

	    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
	    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

	    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
	    var top = ((height / 2) - (h / 2)) + dualScreenTop;
	    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

	    // Puts focus on the newWindow
	    if (window.focus) {
	        newWindow.focus();
	  	}
	}

});