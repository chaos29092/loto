<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=[
      'name','title','description','keywords','mainpic','profile','main','standard','options','categorypic','categorypara','category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function product_models()
    {
        return $this->hasMany('App\ProductModel');
    }
}
