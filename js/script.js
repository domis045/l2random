(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



function slideSwitch() {
    var active = $('#slideshow_panel a.active');
    if (active.length == 0) active = $('#slideshow_panel a:last');
    var next =  active.next().length ? active.next() : $('#slideshow_panel a:first');

	active.addClass('last-active').hide("slide",{direction: 'right'},1000).show();
	
	next.addClass('active').show("slide", 1000, function() {
		active.removeClass('active last-active');
	});
}

function changeTimer() {
	var element = $('#countDown');
	var secs = element.attr("title");

	var units = {
		'Day': 86400,
		'Hour': 3600,
		'Minute': 60,
		'Second': 1
	};

	var strs = new Array();
	
	for (var key in units) {
		var inter = units[key];
		

			
		var num = Math.floor(secs / inter);
		secs = secs % inter;

		strs.push(num+" "+key+""+((num != 1) ? 's' : ''));
	}
	
	if (typeof strs !== 'undefined' && strs.length > 0)
		element.html(strs.join(', '));
		
	if (element.attr("title") <= 0)
		element.html("PARDUODAMI PROJEKTO FAILAI");
	
	element.attr("title",element.attr("title")-1);
	
	element.effect("pulsate", {}, 1000);

}

$(function() {
    setInterval("changeTimer()", 1000);
});

$(function() {
    setInterval("slideSwitch()", 5000);
});
