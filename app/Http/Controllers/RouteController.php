<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Subcategory;
use App\Course;
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
		$cat = Course::where('slug',$slug)->get()->first();
	    return view('website.course.course')->with('data',$cat);
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