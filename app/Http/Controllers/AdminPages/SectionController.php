<?php
namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Course;
use App\Section;
use App\Lecture;
class SectionController extends Controller
{  
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin/course/addSection');
    }

    public function store(Request $request)
    { 
       $newSection = new Section;
      $data = [
            'name'=>$request->name,
            'order'=>$request->order,
            'course_id'=>$request->course
        ];
        $newSection->create($data);
        return redirect('/admin/lecture/add');
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
