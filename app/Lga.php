<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function wards(){
        return $this->hasMany(Ward::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
