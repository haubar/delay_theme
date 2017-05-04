jQuery(document).ready(function($) {

	//date picker
	if(jQuery('.top-bar .date-plugin').hasClass('flatpickr')){
		
		jQuery(".flatpickr").flatpickr({
			wrap: true,
			clickOpens: false,
			disableMobile: true
		});
	}

	//mobile search
	jQuery('.btn.search.pc-h').on('click', function(){
		if($( "#key_search" ).val() ==''){
			jQuery('.search-input').toggle();
		}
		else
		{
			$( "input[name=s]" ).val($( "#key_search" ).val());
			$( "#searchform" ).submit();
		}
	})

	jQuery('.btn.search.mb-h').on('click', function(){
		if($( "#key_search" ).val()!==''){
			$( "input[name=s]" ).val($( "#key_search" ).val());
			$( "#searchform" ).submit();
		}
	})

	

	//footer scroll
	if(jQuery('body div').hasClass('banner')){
		var banner = true;
	}else{
		var banner = false;
	}
	jQuery(window).scroll(function(){
		if(banner === true){
			jQuery('.footer.mb-h').stop().animate({top: jQuery(this).scrollTop()}, 500);
		}else{
			jQuery('.footer.mb-h').stop().animate({top: jQuery(this).scrollTop() + 300}, 500);	
		}
		
	})

	//go top
	jQuery('.go-top').click(function(){
		jQuery('html,body').animate({ scrollTop: jQuery('body').offset().top}, 'slow');
	})

	//nav toggle
	jQuery('.top-bar .btn-nav').on('click', function(event) {
		jQuery('.top-bar .nav').toggleClass('open');
	});

});