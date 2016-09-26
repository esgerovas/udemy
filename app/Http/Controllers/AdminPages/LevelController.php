<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Level;

class LevelController extends Controller
{  
 public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $data=Level::all();
        return view('admin/parametr/level')->with('data',$data);;
    }

    public function store(Request $request)
    { 
        $newLevel = new Level;
         $newLevel->create($request->all());
        return back();
    }

    public function delete($id)
    {
        $data = Level::find($id);
        $data->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = Level::find($id);
        $data->update($request->all());
        return back();
    }
}
