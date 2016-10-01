<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
class Course extends Model
{

    protected $fillable = [
        'title', 'headline', 'description','slug','image','status','subcategory_id','teacher_id','level_id','language_id'
    ];
        
    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }
    public function subcategory(){
    	return $this->belongsTo('App\Subcategory');
    }
    public function level(){
    	return $this->belongsTo('App\Level');
    }
    public function language(){
    	return $this->belongsTo('App\Language');
    }
    public function sections(){
        return $this->hasMany('App\Section');
    }    
    public function vcount($id){
        return DB::select("call lec_count($id)")[0]->lec_count;
    } 
    public function vduration($id){
    $duration = DB::select("call lec_duration($id)");  
    $dur = ($duration[0]->lec_duration)/60;
    $h=0;
        if($dur<60){
            $m=round($dur);
        }else{
            $h = round($dur/60);
            $m = $dur%60;
        }
    return $h.'.'.$m;
    } 
}
