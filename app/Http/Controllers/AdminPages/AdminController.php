<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
