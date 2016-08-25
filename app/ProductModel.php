<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
    protected $fillable=[
        'name','main','more','product_id',
    ];
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
