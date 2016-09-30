<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
	    protected $fillable = [
        'name', 'duration', 'order','slug','video_link','youtube_link','section_id','text'
    ];
    public function section(){
    	return $this->belongsTo('App\Section');
    }
}
