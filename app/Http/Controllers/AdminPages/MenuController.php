<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

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
    { 
        $newMenu = new Category;
         $newMenu->name=$request->name;
         $newMenu->icon=$request->icon;
         $newMenu->slug=$request->name;
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
    {
        $data = Category::find($id);
        $data->update($request->all());
        return back();
    }
}
