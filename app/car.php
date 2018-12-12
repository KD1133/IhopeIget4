<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public $timestamps = false;

    protected $guarded = [];

//    public function user()
//    {
//        return $this->belongsToMany(user::class);
//    }
}
