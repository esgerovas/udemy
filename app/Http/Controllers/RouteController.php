<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class RouteController extends Controller
{
	function home(){
		return view('website.home');
	}
  	function courses() {
	   	return view('website.courses');
	}
	function categories() {
	    return view('website.course.categories');
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