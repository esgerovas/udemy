//navigator hissede menunun cixmasi ucun
function navigator(){
	width = $(window).width();
	$("#main-Page .sidebar").css({
		transform: "translateX(-"+width+"px)",
		opacity: "0"
	});
	$("#main-Page .browseMenu").css({
		transform: "translateX(-"+width+"px)",
		opacity: "0"
	});

	$("#main-Page .navigat").click(function() {
		$("#main-Page .sidebar").css({
			transform: "translateX(-8px)",
			opacity: "1",
			transition: "all 0.4s ease"
		});
		$("#main-Page .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .slider a").css({
			pointerEvents: "none",
			cursor: "default"
		});
		$("#courses-catalog a").css({
			pointerEvents: "none",
			cursor: "default"
		});
		$("#search-course a,input").css({
			pointerEvents: "none",
			cursor: "default"
		});
	});
	$("#main-Page .sidebar .buttonBrowse").click(function() {
		$("#main-Page .sidebar").css({
		transform: "translateX(-"+width+"px)",
		opacity: "0",
		transition: "all 0.4s ease"
	});
		$("#main-Page .browseMenu").css({
			transform: "translateX(0)",
			opacity: "1",
			transition: "all 0.4s ease"
		});
	});
	$("#main-Page .browseMenu div").click(function() {
		$("#main-Page .sidebar").css({
			transform: "translateX(-8px)",
			opacity: "1",
			transition: "all 0.4s ease"
		});
		$("#main-Page .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
	});

	$("#main-Page .slider").click(function() {
		$("#main-Page .sidebar").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .slider a").css({
			pointerEvents: "",
			cursor: ""
		});
		$("#courses-catalog a").css({
			pointerEvents: "",
			cursor: ""
		});
		$("#search-course a,input").css({
			pointerEvents: "",
			cursor: ""
		});
	});
	$("#courses-catalog").click(function() {
		$("#main-Page .sidebar").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .slider a").css({
			pointerEvents: "",
			cursor: ""
		});
		$("#courses-catalog a").css({
			pointerEvents: "",
			cursor: ""
		});
		$("#search-course a,input").css({
			pointerEvents: "",
			cursor: ""
		});
	});
	$("#search-course").click(function() {
		$("#main-Page .sidebar").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#main-Page .slider a").css({
			pointerEvents: "",
			cursor: ""
		});
		$("#courses-catalog a").css({
			pointerEvents: "",
			cursor: ""
		});
		$("#search-course a,input").css({
			pointerEvents: "",
			cursor: ""
		});
	});


	//olculerin beraberlesmesu ucun
	function widthSideBar(){
		if($(window).width() > 620){
			windowWidth = $(window).width() - 230;
			$("#main-Page .sidebar").width(windowWidth);
			$("#main-Page .browseMenu").width(windowWidth);
			$(window).resize(function() {
				windowWidth = $(window).width() - 230;
				$("#main-Page .browseMenu").width(windowWidth);
				$("#main-Page .sidebar").width(windowWidth);
			});
		}
		if($(window).width() < 620){
			windowWidth = $(window).width() - 100;
			$("#main-Page .sidebar").width(windowWidth);
			$("#main-Page .browseMenu").width(windowWidth);
			$(window).resize(function() {
				windowWidth = $(window).width() - 100;
				$("#main-Page .browseMenu").width(windowWidth);
				$("#main-Page .sidebar").width(windowWidth);
			});
		}
	}
	widthSideBar();

	//menunun uzunlugunun ekranin uzunlugu ile uygunlasmasi ucun
	function heightSideBar(){
		height = $(window).height();
		$("#main-Page .sidebar").height(height);
		$("#main-Page .browseMenu").height(height);
	}
	heightSideBar();
}
navigator();

//signUP Page open and close
function login(){
	$("#main-Page .loggin").click(function() {
		$("#main-Page .login-First").css({"display":"block"});
		width = $(window).width();
		$("#main-Page .sidebar").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0"
		});
		$("#search-course .login-First a,input").css({
			pointerEvents: "",
			cursor: ""
		});
	});
	$("#main-Page .login-First i").click(function() {
		$("#main-Page .login-First").css({"display":"none"});
	});
	$("#main-Page .login-First .writeInfo button").click(function() {
		$("#main-Page .login-First").css({"display":"none"});
		$("#main-Page .signUP-First").css({"display":"block"});
	});
}
login();

//login Page open and close
function signUP(){
	$("#main-Page .sin").click(function() {
		$("#main-Page .signUP-First").css({"display":"block"});
		width = $(window).width();
		$("#main-Page .sidebar").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0"
		});
		$("#search-course .signUP-First a,input").css({
			pointerEvents: "",
			cursor: ""
		});
	});
	$("#main-Page .signUP-First i").click(function() {
		$("#main-Page .signUP-First").css({"display":"none"});
	});
	$("#main-Page .signUP-First .writeInfo button").click(function() {
		$("#main-Page .signUP-First").css({"display":"none"});
		$("#main-Page .login-First").css({"display":"block"});
	});
}
signUP();