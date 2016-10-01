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

    public function store(Request $request){

    $dir='/storage/courseVideo';
    if($request->duration){
        $manual = "$request->duration";
        $vidkey = "";
        $filename = date('YmdHis')."-".$request->file('video_link')->getClientOriginalName();
        $request->file('video_link')->move($dir,$filename);
    }elseif($request->youtube_link){
        $vidkey = $request->youtube_link ; 
        $apikey = "AIzaSyCbwb7MfEG7EN_uBIvIL7xAsqT2eVWwwZA" ;
        $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$vidkey&key=$apikey");
        $VidDuration =json_decode($dur, true);
        $durationVideo = $VidDuration['items'][0]['contentDetails']['duration'];
        preg_match_all('/(\d+)/',$durationVideo,$parts);
        $hours = intval(floor($parts[0][0]/60) * 60 * 60);
        $minutes = intval($parts[0][0]/60 * 60);
        $seconds = intval($parts[0][1]);
        $manual =  $hours . ":" . $minutes . ":" . $seconds; //this is the example in seconds
        $filename = "";
    }
    
        $newLecture = new Lecture;
        $slug = str_slug($request->name, "-");
        $data = [
            'name'=>$request->name,
            'text'=>$request->text,
            'order'=>$request->order,
            'slug'=>$slug,
            'section_id'=>$request->section,
            'video_link'=>$filename,
            'youtube_link'=>$vidkey,
            'duration'=>$manual
        ];
        $newLecture->create($data);
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
