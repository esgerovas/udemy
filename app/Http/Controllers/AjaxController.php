<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
class AjaxController extends Controller
{
    public function category($id)
    {
    	$a = Category::find($id);
    	$b=$a->subcategories;
    	
    	return $b->toJson();
    }
}
