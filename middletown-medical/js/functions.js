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
			 scroll : {
        duration : 1000}
		});
	};
	
	
	
	
	
	
	$('a#feedback').each(function() {
		if ($(this).attr('href') == "") {
		$(this).hide();
		$(this).siblings('#ref').addClass('nofeed');
	}
	});
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
		var box_height = $('.container.inner #sidebar').outerHeight();
		var box_imgheight = $('.container.inner #sidebar').outerHeight() - 40;
		$('.container.inner .image-holder').css('height', box_height);
		$('.container.inner .image-holder img').css('height', box_imgheight);
		var reqBut_top = $('#sidebar').outerHeight() - 38;
		$('#requestButton').css('top', reqBut_top);
	})
	
	
	// added js for pods
	$('.staffLocation a#ele').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');									  
		$(this).css('font-weight','bold');
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locEle').css('display', 'block');
	});
	$('.staffLocation a#mid').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');									  
		$(this).css('font-weight','bold');
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locMid').css('display', 'block');
	});
	$('.staffLocation a#war').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');									  
		$(this).css('font-weight','bold');									  
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locWar').css('display', 'block');
	});
	$('.staffLocation a#lib').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');									  
		$(this).css('font-weight','bold');									  
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locLib').css('display', 'block');
	});
	$('.staffLocation a#pj').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');
		$(this).css('font-weight','bold');									 
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locPJ').css('display', 'block');
	});
	$('.staffLocation a#wur').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');					
		$(this).css('font-weight','bold');									  
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locWur').css('display', 'block');
	});
	$('.staffLocation a#sul').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');					
		$(this).css('font-weight','bold');									  
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locSul').css('display', 'block');
	});
	$('.staffLocation a#che').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');					
		$(this).css('font-weight','bold');									  
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locChe').css('display', 'block');
	});
	$('.staffLocation a#blo').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');					
		$(this).css('font-weight','bold');									  
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locBlo').css('display', 'block');
	});
		$('.staffLocation a#capm').click( function(e) {
		$('.staffLocation a').css('font-weight','normal');									  
		$(this).css('font-weight','bold');
		$('#LocDetail > div').css('display', 'none');								  	
		e.preventDefault();
		$('#locCapm').css('display', 'block');
	});
	$('.staffLocation a:nth-child(2)').click();
	
	//$('.bioShort:empty').html('Filled');
	$('.bioShort:empty').siblings('a').css('display','none');
	$('.bioShort:empty').siblings('h2').children().contents().unwrap();
	//$('.bioShort:empty').parent('a').contents().unwrap();
	
	
	$('.specCombo ul').hide();
    $('.specCombo').hover(
        function(){
            $(this).find('ul').stop().slideDown();
        },
        function(){
            $(this).find('ul').stop().slideUp();
        }
    );
    $('.specCombo li').click(function(){
        $(this).parents('.specCombo').find('h3').text($(this).text());
		$('.locCombo h3').text('Filter by location');
    });
	
	$('.locCombo ul').hide();
    $('.locCombo').hover(
        function(){
            $(this).find('ul').stop().slideDown();
        },
        function(){
            $(this).find('ul').stop().slideUp();
        }
    );
    $('.locCombo li').click(function(){
        $(this).parents('.locCombo').find('h3').text($(this).text());
		$('.specCombo h3').text('Filter by specialty');
    });
	
	$('.pinthis').hover(
		function(){
			$('#pininit').show();	
		},
		function(){
			$('#pininit').hide();		
		}
	);
	$('#pininit').hover(
		function(){
			$(this).show();	
		},
		function(){
			$(this).hide();				
		}
	);
	$('#requestButton a').click(function(){
	
		try{
    _gaq.push(['_trackEvent', 'External Links', 'Click', $(this).attr('href')]);
	} catch(err) {}
	return true;
	});
	$('.phoneShow').hover(		
			function () {
				//change the background of parent menu				
				$(this).addClass('hover');				
				//display the submenu
				$('.phoneHid').show();
				console.log('hovered');	
				_gaq.push(['_trackEvent','phonenumbers','mouseover','numbers']);		
			},
		
			function () {
				//change the background of parent menu
				$('.phoneShow').removeClass('hover');	
				//display the submenu
				$('.phoneHid').hide();				
			}		
		);
		$('.phoneHid').hover(		
			function () {						
				$(this).show();
				$('.phoneShow').addClass('hover');			
			},		
			function () {
				$(this).hide();
				$('.phoneShow').removeClass('hover');				
			}		
		);
		
	
});