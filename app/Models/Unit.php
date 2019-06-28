<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function ward(){
        return $this->belongsTo(Ward::class);
    }
}
