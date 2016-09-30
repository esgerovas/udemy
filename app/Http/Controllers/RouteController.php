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
		$cat = Category::find($cat_id);
		$sub = Subcategory::find($sub_id);
		$arr = array('cat' => $cat,'sub'=>$sub);
		// dd($arr);
	    return view('website.course.featured')->with('data',$arr);
	}
	function allCourses($slug) {
		dd($slug);
	    return view('website.course.allCourses');
	}
	function course() {
	    return view('website.course.course');
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