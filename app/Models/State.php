<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function lgas(){
        return $this->hasMany(Lga::class);
    }
}
