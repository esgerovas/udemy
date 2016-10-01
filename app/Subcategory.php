<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{	
	protected $fillable=['name', 'icon','slug'];
	public $timestamps = false;
    public function category()
    {
        return $this->belongsTo('App\Category');
    }    
    public function courses(){
    	return $this->hasMany('App\Course');
    }

}
