
var kk=0;
function setmenu(i)
{

	var krok=26;
	var height=22+(i-1)*krok;
	if(i==0) {kk=i; return false;}
	$("#selector").animate({top: height},120);
	kk=i;
}
function outmenu()
{
	$("#selector").animate({top:22 },120);						
}


(function($) {
$(function() {

	$('ul.tabs').delegate('li:not(.current)', 'click', function() {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.section').find('div.box').hide().eq($(this).index()).fadeIn(150);
	})
	$('#menu').mouseleave(function(){
	  outmenu();
	});

})
})(jQuery)



