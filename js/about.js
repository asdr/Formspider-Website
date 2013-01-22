$(document).ready(function() {
	$('.about-us').click(function(){
		$('.about-us #list-of-people div').hide();
		$('.about-us #list-of-people li').removeClass("active");
	});
	
	$('.about-us #list-of-people .person').click(function(e) {
			$('.about-us #list-of-people div').hide();
			$('.about-us #list-of-people li').removeClass("active");
			$(this).parent().addClass("active");
			$(this).parent().find("div").fadeIn("fast");
			// $('.about-us #list-of-people li').not($(this.parent())).removeClass("active");
			// $('.about-us #list-of-people li div').not($(this.parent().find("div"))).hide();
			e.preventDefault();
			e.stopPropagation();
	});

	$('.about-us #list-of-people li a div a').click(function() {
			return false;
	});
});