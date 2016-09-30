<?php
namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Course;
use App\Section;
use App\Lecture;
class CourseController extends Controller
{  
 public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin/course/addCourse');
    }

    public function store(Request $request)
    { 
      $newCourse = new Course;
      $dir='assets/images/courseImg';
      $filename = date('YmdHis')."-".$request->file('image')->getClientOriginalName();
      $request->file('image')->move($dir,$filename);
      $slug = str_slug($request->title, "-");
      $data = [
            'title'=>$request->title,
            'headline'=>$request->headline,
            'description'=>$request->description,
            'slug'=>$slug,
            'image'=>$filename,
            'status'=>$request->status,
            'teacher_id'=>$request->teacher,
            'subcategory_id'=>$request->subcategory,
            'level_id'=>$request->level,
            'language_id'=>$request->lang
        ];
        $newCourse->create($data);
        return redirect('/admin/section/add');
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
