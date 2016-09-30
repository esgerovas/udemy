<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Language;

class LanguageController extends Controller
{  
 public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $data=Language::all();
        return view('admin/parametr/language')->with('data',$data);
    }

    public function store(Request $request)
    { 
        $newLanguage = new Language;
         $newLanguage->create($request->all());
        return back();
    }

    public function delete($id)
    {
        $data = Language::find($id);
        $data->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = Language::find($id);
        $data->update($request->all());
        return back();
    }
}
