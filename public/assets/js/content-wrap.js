//kurslarin view olunmasi
function contentWrapView(){
	$("#content-wrap .courses_list .right_buttons .view_btn").click(function() {
		console.log("a");
		$(this).css({
			display: "none"
		});
		$(this).siblings('button').eq(1).css({
			display: "none"
		});
		$(this).siblings('button').eq(2).css({
			display: "none"
		});
		$(this).siblings('button').eq(0).css({
			display: "inline-block"
		});
		$(this).parent(".right_buttons").siblings('.sub-panel').css({
			overflow: "visible"
		});
	});
	$("#content-wrap .courses_list .right_buttons .collapse_btn").click(function() {
		console.log("a");
		$(this).css({
			display: "none"
		});
		$(this).siblings('button').eq(1).css({
			display: "inline-block"
		});
		$(this).siblings('button').eq(2).css({
			display: "inline-block"
		});
		$(this).siblings('button').eq(0).css({
			display: "inline-block"
		});
		$(this).parent(".right_buttons").siblings('.sub-panel').css({
			overflow: "hidden"
		});
	});
}
contentWrapView();

//slider
function contentWrapSlider(){
	a = $("#content-wrap .courses_list .sub-panel").width();
	console.log(a);
	$("#content-wrap .courses_list button").eq(2).click(function() {
		console.log("a");
		$("#content-wrap .courses_list .panel-box").eq(0).css({
			// transform: "translateX(-"+a+"px)",
			marginLeft: "-"+a+"px",
			overflow: "hidden",
			transition: "all 0.4s ease"
		});
	});
}
// contentWrapSlider();