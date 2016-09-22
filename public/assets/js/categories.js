jQuery(document).ready(function($) {
	$("#categories-wrap .content .relate").click(function(event) {
		$("#pop-up").addClass('active');
		$("#categories-wrap .sidebar-nav").addClass('sidebar-nav-min').animate({top:'15%'}, 200);
	});
	$("#categories-wrap .sidebar-nav .closed").click(function(event) {
		$("#categories-wrap .sidebar-nav-min").animate({top:'0'}, 200,function(){
			$(this).removeClass('sidebar-nav-min');
			$("#pop-up").removeClass('active');
		});
	});
	$("#categories-wrap .sidebar-btn-forcourse .refine").click(function(event) {
		$("#pop-up").addClass('active');
		$("#categories-wrap .sorting").addClass('sorting-min').animate({top:'15%'}, 200);
	});
	$("#categories-wrap .sorting .closed").click(function(event) {
		$("#categories-wrap .sorting-min").animate({top:'0'}, 200,function(){
			$(this).removeClass('sorting-min');
			$("#pop-up").removeClass('active');
		});
	});
	$("#categories-wrap .sorting .btn-close").click(function(event) {
		$("#categories-wrap .sorting-min").animate({top:'0'}, 200,function(){
			$(this).removeClass('sorting-min');
			$("#pop-up").removeClass('active');
		});
	});
	$("#pop-up").click(function(event) {
		$("#categories-wrap .sidebar-nav-min").animate({top:'0'}, 200,function(){
			$(this).removeClass('sidebar-nav-min');
			$("#pop-up").removeClass('active');
		});
		$("#categories-wrap .sorting-min").animate({top:'0'}, 200,function(){
			$(this).removeClass('sorting-min');
			$("#pop-up").removeClass('active');
		});
	});
});