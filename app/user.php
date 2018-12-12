<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class user extends Authenticatable
{
    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = 'username';

    protected $guarded = [];

    public function car()
    {
        return $this->hasMany(car::class);
    }

    public function cars()
    {
        return $this->belongsToMany(car::class);
    }
}
