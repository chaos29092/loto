<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name','max_temp','main_pic','banner','description'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
