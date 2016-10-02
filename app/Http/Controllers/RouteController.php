<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Subcategory;
use App\Course;
use App\Lecture;
use DB;
class RouteController extends Controller
{
	function home(){
		return view('website.home');
	}

  	function courses() {
	   	return view('website.courses');
	}

	function featured($cat_id, $sub_id) {
		$cat = Category::where('slug',$cat_id)->get()->first();
		$sub = Subcategory::where('slug',$sub_id)->get()->first();
		$arr = array('cat' => $cat,'sub'=>$sub);
	    return view('website.course.featured')->with('data',$arr);
	}

	function allCourses($cat_id, $sub_id) {
		$cat = Category::where('slug',$cat_id)->get()->first();
		$sub = Subcategory::where('slug',$sub_id)->get()->first();
		$arr = array('cat' => $cat,'sub'=>$sub);
	    return view('website.course.allCourses')->with('data',$arr);
	}

	function viewCourse($slug) {
		$crs = Course::where('slug',$slug)->first();
		$t = $crs->teacher;
		$section = $crs->sections()->orderBy('order','asc')->get();
		$lec_count = DB::select("call lec_count($crs->id)");
		$duration = DB::select("call lec_duration($crs->id)");	
		$dur = ($duration[0]->lec_duration)/60;
		if($dur<60){
			$dur=round($dur).' dəqiqə';
		}else{
			$h = round($dur/60);
			$m = $dur%60;
			$dur = $h. ' saat '.$m.' dəqiqə'; 
		}
	    return view('website.course.course',compact('crs','lec_count','dur','t', 'section'));
	}

	function viewVideo($slug, $id=null) {

		$course=Course::where('slug',$slug)->first();
		$section = Course::where('slug',$slug)->first()->sections()->orderBy('order','asc')->get();
		$a = $section->first()->lectures()->orderBy('order','asc')->get()->first();

		if($id !=null){
			$a = Lecture::find($id);
		}
	        if($a->youtube_link == ""){
	            $b=$a->video_link;
	            $k=1;
	        }else{
	            $b=$a->youtube_link;
	            $k=0;
	        }
	    return view('website.course.viewCourseVideo',compact('b','k','section','course'));
	}

	function shopping() {
	    return view('website.course.shopping');
	}
	function my_courses() {
	    return view('website.course.my_courses');
	}
	function edit_profile() {
	    return view('website.course.edit_profile');
	}
	function account_settings() {
	    return view('website.course.account_settings');
	}
}