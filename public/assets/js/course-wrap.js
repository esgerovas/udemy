function courseWrap(){
	$("#about_use .Description").css({
		height: "200px",
		overflow: "hidden"
	});
	$("#about_use .details").click(function(){
		$("#about_use .Description").css({
			minHeight: "1200px",
			overflow: "visible"
		});
		$("#about_use .details").hide();
		if($(window).width() < 480){
			$("#about_use .Description").css({
				minHeight: "1750px",
				overflow: "visible"
			});
		}
	});
}
courseWrap();