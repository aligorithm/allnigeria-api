<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $guarded = [];
    public function ward(){
        return $this->belongsTo(Ward::class);
    }
}
