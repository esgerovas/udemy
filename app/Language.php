<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $fillable=['name'];
	public $timestamps = false;
   public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
