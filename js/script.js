$(document).ready(function() {
	
	$(".menu-icon").click(function() {
		$("nav").slideToggle();
	});


// Thank you chris for this idea
// \/\/\/\/

	$(window).resize(function(){  
	    var w = $(window).width();  
	    if(w > 680) {  
	        $("nav").removeAttr('style');  
	    }  
	});

// /\/\/\/\

	$("#comments").focus(function() {
		$(this).css('height', '100px');
	});
	

	$("#comments").blur(function() {
		if ($(this).val().length == 0) {
			$(this).css('height', 'initial');
		}
	})
})