//Footerde dil barinin islemesi ucun
function language_bar(){
	$("#footer-wrap .language_box").hide();
	$("#footer-wrap .language").click(function() {
		$("#footer-wrap .language_box").toggle();
	});
}
language_bar();