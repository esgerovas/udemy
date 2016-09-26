<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	protected $fillable=['name'];
	public $timestamps = false;

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
