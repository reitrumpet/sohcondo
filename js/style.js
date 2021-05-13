jQuery(document).ready(function($) {
	var zero = 0;
$(document).ready(function(){
	$(window).on('scroll', function(){
		$('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
		zero = $(window).scrollTop();
	})
})
});

jQuery(document).ready(function($) {
	jQuery('.gallery').magnificPopup({
		delegate: 'a', //child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled:true,
			navigateByImgClick:true,
		},
		image:{
			titleSrc: 'title',
		}
	})
});
