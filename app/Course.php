<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


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
}
