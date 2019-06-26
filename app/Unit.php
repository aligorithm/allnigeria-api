<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];
    public function ward(){
        return $this->belongsTo(Ward::class);
    }
}
