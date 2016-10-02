function viewCourse(){
	$a = $(window).width();
    if($a < 960){
    	// $('#viewCourseVideo .all').css({
    	// 	height: "800px"
    	// });
		$('#viewCourseVideo .viewList').click(function(){
			$('#viewCourseVideo .videoList').css({
				transform: "translateX(0)"
			});
			$('#viewCourseVideo .viewList').hide();
		});
		$('#viewCourseVideo .videoList .close').click(function() {
			$('#viewCourseVideo .videoList').css({
				transform: "translateX(-300px)"
			});
			$('#viewCourseVideo .viewList').show();
		});
	}
}
viewCourse();