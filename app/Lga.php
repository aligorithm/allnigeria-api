<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];
    public function wards(){
        return $this->hasMany(Ward::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
