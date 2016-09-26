<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	protected $fillable=['name', 'icon','slug'];
	public $timestamps = false;
    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }
}
