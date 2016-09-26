<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function index(){
    	// return Auth::guard('admin')->user();
    	return view('admin.dashboard');
    }

    public function courses(){
    	return view('admin.viewAllCourse');
    }
    public function addCourse(){
    	return view('admin.courseCreate');
    }
    public function unsignedAuthors(){
    	return view('admin.unsignedAuthors');
    }
}
