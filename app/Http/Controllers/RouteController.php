<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Subcategory;
use App\Course;
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
		$lec_count = DB::select("call lec_count($crs->id)");
		$duration = DB::select("call lec_duration($crs->id)");	
		$dur = ($duration[0]->lec_duration)/60;
		if($dur<60){
			$dur=$dur.' dəqiqə';
		}else{
			$h = round($dur/60);
			$m = $dur%60;
			$dur = $h. ' saat '.$m.' dəqiqə'; 
		}
	    return view('website.course.course',compact('crs','lec_count','dur','t'));
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
	function viewVideo() {
	    return view('website.course.viewCourseVideo');
	}
}