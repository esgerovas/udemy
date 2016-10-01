<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Category;
class MenuController extends Controller
{  
 public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $data=Category::all();
        return view('admin/parametr/menu')->with('data',$data);
    }

    public function store(Request $request)
    { $slug = str_slug($request->name, "-");
        $newMenu = new Category;
         $newMenu->name=$request->name;
         $newMenu->icon=$request->icon;
         $newMenu->slug=$slug;
         $newMenu->save();
        return back();
    }

    public function delete($id)
    {
        $data = Category::find($id);
        $data->delete();
        return back();
    }

    public function update(Request $request, $id)
    {      DB::table('categories')
            ->where('id', $id)
            ->update(['name' => $request->name,'icon' => $request->icon,'slug'=>str_slug($request->name, "-")]);
        return back();
    }
}
