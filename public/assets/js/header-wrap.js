//width 760px den asagida search un islemesi
function searchbar(){
	$("#header-wrap button").click(function() {
		if($(window).width() < 760){
			$("#header-wrap .navigator").hide();
			$(this).hide();
			$("#header-wrap .logo2").hide();
			$("#header-wrap .shopping").hide();
			$("#header-wrap .search input").css({
				display: 'block'
			});
			$("#header-wrap .search").css({
				width: '100%'
			});
		}
	});

	$("#header-wrap .search .submit").click(function() {
		if($(window).width() < 760){
			$("#header-wrap .navigator").show();
			
			$("#header-wrap .logo2").show();
			$("#header-wrap .shopping").show();
			$("#header-wrap .search input").css({
				display: 'none'
			});
			$("#header-wrap button").show();
			$("#header-wrap .search").css({
				width: '0'
			});
		}
	});
}
searchbar();


//Sol menunun uzunlugunun footere qeder uzanmasi
function leftMenuWidth(){
	if($(window).width() > 960){
		a = $("#content-wrap").height();
		$("#header-wrap .fixedMenuBar").height(a);
		$("#header-wrap .fixedMenuBar").find('ul').height(a);
	}
	if($(window).width() < 960){
		$("#content-wrap .fixedMenuBar").height(450);
	}
}
leftMenuWidth();


//navigator hissede menunun cixmasi ucun
function navigator(){
	width = $(window).width();
	$("#header-wrap .sidebar").css({
		transform: "translateX(-"+width+"px)",
		opacity: "0"
	});
	$("#header-wrap .browseMenu").css({
		transform: "translateX(-"+width+"px)",
		opacity: "0"
	});

	$("#header-wrap .navigat").click(function() {
		$("#header-wrap .sidebar").css({
			transform: "translateX(-8px)",
			opacity: "1",
			transition: "all 0.4s ease"
		});
		$("#header-wrap .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#content-wrap .container-fluid a").css({
			pointerEvents: "none",
			cursor: "default",
		});
		// $("#content-wrap .container-fluid").css({
		// 	position: "relative",
		// 	zIndex: "111",
		// 	backgroundColor: "gray",
		// 	opacity: "0.8",
		// 	transition: "all 0.4s ease"
		// });
	});
	$("#header-wrap .sidebar .buttonBrowse").click(function() {
		$("#header-wrap .sidebar").css({
		transform: "translateX(-"+width+"px)",
		opacity: "0",
		transition: "all 0.4s ease"
	});
		$("#header-wrap .browseMenu").css({
			transform: "translateX(0)",
			opacity: "1",
			transition: "all 0.4s ease"
		});
	});
	$("#header-wrap .browseMenu div").click(function() {
		$("#header-wrap .sidebar").css({
			transform: "translateX(-8px)",
			opacity: "1",
			transition: "all 0.4s ease"
		});
		$("#header-wrap .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
	});

	$("#content-wrap .container1").click(function() {
		$("#header-wrap .sidebar").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#header-wrap .browseMenu").css({
			transform: "translateX(-"+width+"px)",
			opacity: "0",
			transition: "all 0.4s ease"
		});
		$("#content-wrap .container-fluid a").css({
			pointerEvents: "",
			cursor: ""
		});
		// $("#content-wrap .container-fluid").css({
		// 	backgroundColor: "",
		// 	opacity: "",
		// 	transition: "",
		// 	transition: "all 0.4s ease"
		// });
	});


	//olculerin beraberlesmesu ucun
	function widthSideBar(){
		if($(window).width() > 620){
			windowWidth = $(window).width() - 230;
			$("#header-wrap .sidebar").width(windowWidth);
			$("#header-wrap .browseMenu").width(windowWidth);
			$(window).resize(function() {
				windowWidth = $(window).width() - 230;
				$("#header-wrap .browseMenu").width(windowWidth);
				$("#header-wrap .sidebar").width(windowWidth);
			});
		}
		if($(window).width() < 620){
			windowWidth = $(window).width() - 100;
			$("#header-wrap .sidebar").width(windowWidth);
			$("#header-wrap .browseMenu").width(windowWidth);
			$(window).resize(function() {
				windowWidth = $(window).width() - 100;
				$("#header-wrap .browseMenu").width(windowWidth);
				$("#header-wrap .sidebar").width(windowWidth);
			});
		}
	}
	widthSideBar();

	//menunun uzunlugunun ekranin uzunlugu ile uygunlasmasi ucun
	function heightSideBar(){
		height = $(window).height();
		$("#header-wrap .sidebar").height(height);
		$("#header-wrap .browseMenu").height(height);
	}
	heightSideBar();
}
navigator();