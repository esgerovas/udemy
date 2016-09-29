function courseWrap(){
	$("#about_use .Description").css({
		height: "200px",
		overflow: "hidden"
	});
	$("#about_use .details").click(function(){
		$("#about_use .Description").css({
			minHeight:"150px",
			overflow: "visible"
		});
		$("#about_use .details").hide();
		console.log('a');
	});
}
courseWrap();