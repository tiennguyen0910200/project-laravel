<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	 function product(){
        return $this->hasMany('App\Product',"category_id","id");
    }
}
