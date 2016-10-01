<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Subcategory;
use DB;
class SubmenuController extends Controller
{  
 public function __construct(){
        $this->middleware('admin');
    }



    public function store(Request $request, $id)
    {   $slug = str_slug($request->name, "-");
        $newsubmenu = new Subcategory;
         $newsubmenu->name=$request->name;
         $newsubmenu->icon=$request->icon;
         $newsubmenu->category_id=$id;
         $newsubmenu->slug=$slug;
         $newsubmenu->save();
        return back();
    }

    public function delete($id)
    {
        $data =Subcategory::find($id);
        $data->delete();
        return back();
    }

    public function update(Request $request, $id)
    {     DB::table('subcategories')
            ->where('id', $id)
            ->update(['name' => $request->name,'icon' => $request->icon,'slug'=>str_slug($request->name, "-")]);
        return back();
    }
}
