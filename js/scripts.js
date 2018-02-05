$(document).ready(function() {
//nav 
	var nav_first=1;
	$(".nav li a").hover(function() {
	$(this).animate({ left: "10"}, 300);
		var y = this.offsetTop - 10;
		$('#moveble').stop().animate({top: y }, { duration: 600, easing: "easeOutBack" });
    },function()
    {
		$(this).animate({ left: "0"}, 300);
		$('.nav').find('li a.passive').addClass("active");
		$('.nav').find('li a.passive').removeClass("passive");
		
		$('#moveble').stop().animate({top: 0 }, { duration: 900, easing: "easeInOutBack" });
    });


});