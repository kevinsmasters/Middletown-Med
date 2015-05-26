jQuery(function($) {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});

	if ( $('#slider').length ){
		$("#slider").carouFredSel({
		    pagination: ".pagination",
		});
		$("#slider").carouFredSel({
		    scroll : {
        duration : 1000}

		});
	};

	$('#navigation > .shell > ul > li').on('mouseenter', function(){
		$(this).find('a:eq(0)').addClass('active')
		$(this).find(' > ul').stop(true, true).slideDown();
	}).on('mouseleave', function(){
		$(this).find('a:eq(0)').removeClass('active')
		$(this).find(' > ul').stop(true, true).slideUp();
	});

	$('#navigation .shell > ul > li > ul ').each( function(){
		var ul = $(this).find('ul');

		if ( ul.length )  {
			$(this).addClass('large');
		} else { 
			$(this).addClass('small');
		}
	
	});

	$('<div class="cl" />').insertAfter('.box .col:last');

	$(window).on('load', function(){
		var box_height = $('#sidebar').outerHeight() + 17;

		$('.image-holder').css('height', box_height);
		$('.image-holder img').css('height', box_height);
	})
	
});