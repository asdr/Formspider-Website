$(document).ready(function() {
		
		// $("#bg_clouds").css('opacity','0');
				
		// $('#top').css({
		// 	position : 'relative',
		// 	top : ' -50px',
		// 	opacity : '0'
		// });
		// 
		// $("#top").animate({
		// 	'top': '0',
		// 	'opacity': '1'
		// }, 1000, 'linear');
		
		// $("#bg_clouds").animate({
		// 	'opacity': '1',
		// }, 1000, 'linear');
		// 
		// 	 	$("#bg_clouds").animate({
		// 	'background-position-x': '1000px',
		// 	'background-position-y': '0'
		// }, 40000, 'linear');
			

	jQuery(document).ready(function ($) {
			
		$('.dropdown.hidden ul').hide();
						
		$('.dropdown h2').toggle(function() {
		        $(this).parent().find("span").removeClass("arrow-down");
		        $(this).parent().find("span").addClass("arrow-up");
		        $(this).parent().find("ul").toggle();
			}, function() {
		        $(this).parent().find("span").removeClass("arrow-up");
		        $(this).parent().find("span").addClass("arrow-down");
		        $(this).parent().find("ul").toggle();
		});
		
	});
		
		
		$('.about-us #list-of-people li a').click(function() {
				$('.about-us #list-of-people div').hide();
				$('.about-us #list-of-people li').removeClass("active");
		        $(this).parent().addClass("active");
		        $(this).parent().find("div").fadeIn("fast");
				// $('.about-us #list-of-people li').not($(this.parent())).removeClass("active");
				// $('.about-us #list-of-people li div').not($(this.parent().find("div"))).hide();
				e.preventDefault();
		});
	
		$('.about-us #list-of-people li a div a').click(function() {
				return false;
		});
		
		$('.about-us #list-of-people div').click(function() {
				$(this).parent().removeClass("active");
				$(this).hide();
		});
	
		$('.about-us #list-of-people a').click(function() {
				if( $(this).parent().find("div").is(":hidden") ) {
					
   				}
   				else
   				{
					$(this).parent().find("div").hide();
   				}
		});
	
		/* focus cleaner */
		
	    var Input = $('input.focuscleaner');
	    var default_value = Input.val();

	    $(Input).focus(function() {
	        if($(this).val() == default_value)
	        {
	             $(this).val("");
	        }
	    }).blur(function(){
	        if($(this).val().length == 0)
	        {
	            $(this).val(default_value);
	        }
	    });

	
		$('.learningcenter #posts').children('article').each(function(index)
		{
		    $(this).addClass(index % 2 ? 'even' : 'odd');
		});
	
	
	// function getDocHeight() {
	// 	    var D = document;
	// 	    return Math.max(
	// 	        Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
	// 	        Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
	// 	        Math.max(D.body.clientHeight, D.documentElement.clientHeight)
	// 	    );
	// 	}
	// 	$(window).scroll(function() {
	// 	       if($(window).scrollTop() + $(window).height() == getDocHeight()) {
	// 	           alert("bottom!");
	// 	       }
	// 	});
	
});
