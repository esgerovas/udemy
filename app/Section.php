<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $fillable=['name', 'order', 'course_id'];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function lectures(){
    	return $this->hasMany('App\Lecture');
    }
}
