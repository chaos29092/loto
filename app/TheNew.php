<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheNew extends Model
{
    protected $fillable=[
        'title','profile','body','image','tag'
    ];
}
