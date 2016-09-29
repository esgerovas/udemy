<?php
namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Course;
use App\Section;
use App\Lecture;
class LectureController extends Controller
{  
 public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin/course/addLecture');
    }

    public function store(Request $request)
    { 
      $newLecture = new Lecture;
      $dir='assets/images/courseVideo';
      $filetype=$request->file('video')->getClientOriginalExtension();
      $filename=rand(11111,999).'.'.$filetype;
      $request->file('video')->move($dir,$filename);
      $slug = str_slug($request->name, "-");
      $data = [
            'name'=>$request->name,
            'text'=>$request->text,
            'order'=>$request->order,
            'slug'=>$slug,
            'section_id'=>$request->section,
            'video'=>$filename,
            'link'=>$request->youtubelink
        ];
        $newCourse->create($data);
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
