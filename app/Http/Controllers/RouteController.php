<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class RouteController extends Controller
{
	function home(){
		return view('udemy.home');
	}
  	function courses() {
	   	return view('udemy.courses');
	}
	function categories() {
	    return view('udemy.course.categories');
	}
	function course() {
	    return view('udemy.course.course');
	}
	function shopping() {
	    return view('udemy.course.shopping');
	}
	function my_courses() {
	    return view('udemy.course.my_courses');
	}
	function edit_profile() {
	    return view('udemy.course.edit_profile');
	}
	function account_settings() {
	    return view('udemy.course.account_settings');
	}
}